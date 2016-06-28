<?php

namespace SPSDecidirWrapper\Entities;

/**
 * Entidad para la respuesta del servicio AuthorizeAnswer
 *
 * @package SPSDecidirWrapper\Entities
 * @version 1.0.0
 */
class AuthorizeAnswerResponse {
    public function __construct($response) {
        $this->StatusCode = $response->StatusCode;
        $this->StatusMessage = property_exists($response, 'StatusMessage') ? $response->StatusMessage : "";
        $this->AuthorizationKey = property_exists($response, 'AuthorizationKey') ? $response->AuthorizationKey : "";
        $this->EncodingMethod = property_exists($response, 'EncodingMethod') ? $response->EncodingMethod : "";
        $this->Payload = property_exists($response, 'Payload') ? $response->Payload : "";
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
    public $Payload;

}
