<?php

namespace SPSDecidirWrapper;

use \SoapClient;
use SPSDecidirWrapper\Exceptions\SPSAuthorizeException;

/**
 * Cliente para hacer la interfaz con SPS Decidir
 *
 * @package SPSDecidirWrapper
 * @version 1.0.0
 */
class SPSClient
{

    /**
     * Token de seguridad generado por Decidir
     *
     * @var string
     */
    protected $authtoken;
	
	/**
     * Código de comercio o cuenta provisto por DECIDIR (ID_SITE).
	 * Campo obligatorio, setear default en SPS.config.php.
     *
     * @var string
     */
    protected $merchant;

    /**
     * URL a la que el comprador será dirigido cuando la compra resulte exitosa.
	 * Campo obligatorio, setear default en SPS.config.php.
     *
     * @var string
     */
    protected $URL_OK;

    /**
     * URL a la que el comprador será dirigido cuando la compra no resulte exitosa.
	 * Campo obligatorio, setear default en SPS.config.php.
     *
     * @var string
     */
    protected $URL_error;

    /**
     * Especifica el tipo de codificación que se usa para los datos de la transacciones de pagos (Siempre debe ser XML, este campo está para futuras implementaciones.
     * Setear default en SPS.config.php.
	 *
     * @var string
     */
    public $encoding;

    /**
     * Instancia del cliente SOAP
     *
     * @var \SoapClient Soap Client
     */
    protected $client;

    /**
     * Constructor
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
		$this->checkConfiguration($config);
		
		$this->authtoken = $config['auth_token'];
		$this->merchant = $config['merchant_id'];
		$this->URL_OK = $config['success_redirect_url'];
		$this->URL_error = $config['error_redirect_url'];
		$this->encoding = $config['encoding'];
		
		$http_header = 'Authorization: PRISMA '.$this->authtoken;
		$headers = array(
			'http' => array('header' => $http_header)
		);
		$contexto = stream_context_create($headers);
		
		$options = array(
			'trace' => 1,
			'stream_context' => $contexto,
			'location' => $config['dev'] ? $config['dev_endpoint'] : $config['endpoint']
		);
        $this->client = new SoapClient($config['dev'] ? $config['dev_wsdl'] : $config['wsdl'], options);
        return $this;
    }

	/**
	 * @param array $config
	 * @throws \Exceptions\InvalidArgumentException
	 * @return array
	 */
	private function checkConfiguration(array $config) {
		if(!isset($config['wsdl']) || !is_string($config['wsdl'])) {
			throw new InvalidArgumentException("Missing wsdl field");
		}
		if(!isset($config['endpoint']) || !is_string($config['endpoint'])) {
			throw new InvalidArgumentException("Missing endpoint field");
		}
		if(!isset($config['auth_token']) || !is_string($config['auth_token'])) {
			throw new InvalidArgumentException("Missing auth_token field");
		}
		if(!isset($config['merchant_id']) || !is_string($config['merchant_id'])) {
			throw new InvalidArgumentException("Missing merchant_id field");
		}
		if(!isset($config['success_redirect_url']) || !is_string($config['success_redirect_url'])) {
			throw new InvalidArgumentException("Missing success_redirect_url field");
		}
		if(!isset($config['error_redirect_url']) || !is_string($config['error_redirect_url'])) {
			throw new InvalidArgumentException("Missing error_redirect_url field");
		}
	}
	
	/**
	 * Servicio de pedido de autorización
	 * 
	 * @param \SPSDecidirWrapper\Entities\Authorize 
     * @throws \SPSDecidirWrapper\Exceptions\SPSAuthorizeException
	 * @return Object response
	 */
	public function Authorize($authorize) {
		$array_de_datos = array(
			"Merchant" => $this->merchant,
			"EncodingMethod" => $this->encoding,
			"Security" => "PRISMA ".$this->authtoken,
			"Payload" => "<Request>
							<NROCOMERCIO>".$authorize->NROCOMERCIO."</NROCOMERCIO>
							<NROOPERACION>".$authorize->NROOPERACION."</NROOPERACION>
							<MONTO>".$authorize->MONTO."</MONTO>
							<MEDIODEPAGO>".$authorize->MEDIODEPAGO."</MEDIODEPAGO>
							<EMAILCLIENTE>".$authorize->EMAILCLIENTE."</EMAILCLIENTE>
						</Request>"
		);
		
		$response = $this->client->SendAuthorizeRequest($array_de_datos);

		if($rta->StatusCode == -1){
			echo "rta ok, requestkey: $rta->RequestKey , publicRequestKey: $rta->PublicRequestKey";
		} else {
			throw new SPSAuthorizeException($rta->StatusCode, $rta->StatusMessage);
		}
	}
}
