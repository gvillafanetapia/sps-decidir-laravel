<?php

namespace SPSDecidirWrapper\Entities;

/**
 * Entidad para la respuesta del servicio Authorize
 *
 * @package SPSDecidirWrapper\Entities
 * @version 1.0.0
 */
class AuthorizeResponse {
    public function __construct($response) {
        $this->StatusCode = $response->StatusCode;
        $this->StatusMessage = property_exists($response, 'StatusMessage') ? $response->StatusMessage : "";
        $this->URL_Request = property_exists($response, 'URL_Request') ? $response->URL_Request : "";
        $this->RequestKey = property_exists($response, 'RequestKey') ? $response->RequestKey : "";
        $this->PublicRequestKey = property_exists($response, 'PublicRequestKey') ? $response->PublicRequestKey : "";
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
     * Url del formulario de pago
     *
     *  @var string
     */
    public $URL_Request;

    /**
     * Identificador Privado del Requerimiento obtenido en la respuesta de la operación SendAuthorizeRequest. 
     * Nunca debe ser expuesto hacia el Web Browser. Solo será utilizado entre el Site y DECIDIR
     *
     *  @var string
     */
    public $RequestKey;

    /**
     * Identificador Público del Requerimiento obenido en la respuesta de la operación SendAuthorizeRequest
     *
     *  @var string
     */
    public $PublicRequestKey;

}
