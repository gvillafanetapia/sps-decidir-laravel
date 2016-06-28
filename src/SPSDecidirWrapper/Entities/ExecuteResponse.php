<?php

namespace SPSDecidirWrapper\Entities;

/**
 * Entidad para la respuesta del servicio Authorize
 *
 * @package SPSDecidirWrapper\Entities
 * @version 1.0.0
 */
class ExecuteResponse {
    public function __construct($response) {
        $this->StatusCode = $response->StatusCode;
        $this->StatusMessage = property_exists($response, 'StatusMessage') ? $response->StatusMessage : "";
        $this->AuthorizationKey = property_exists($response, 'AuthorizationKey') ? $response->AuthorizationKey : "";
        $this->EncodingMethod = property_exists($response, 'EncodingMethod') ? $response->EncodingMethod : "";
        
        $payload_xml = property_exists($response, 'Payload') ? $response->Payload : "";
        $payload = simplexml_load_string($payload_xml);
        $this->IDMOTIVO = property_exists($payload, 'IDMOTIVO') ? $payload->IDMOTIVO : "";
        $this->RESULTADO = property_exists($payload, 'RESULTADO') ? $payload->RESULTADO : "";
        $this->FECHAHORA = property_exists($payload, 'FECHAHORA') ? strtotime($payload->FECHAHORA) : "";
    }
    
    /**
     * Código de estado o valor de retorno del Servicio
     *
     *  @var int
     */
    public $StatusCode;

    /**
     * Descripción del códgo de retorno o estado del servicio
     *
     *  @var string
     */
    public $StatusMessage;

    /**
     * 
     *
     *  @var string
     */
    public $AuthorizationKey;

    /**
     * 
     *
     *  @var string
     */
    public $EncodingMethod;

    /**
     * 
     *
     *  @var string
     */
    public $IDMOTIVO;

    /**
     * 
     *
     *  @var string
     */
    public $RESULTADO;

    /**
     * 
     *
     *  @var date
     */
    public $FECHAHORA;

}
