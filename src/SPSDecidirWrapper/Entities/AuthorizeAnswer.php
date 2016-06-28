<?php

namespace SPSDecidirWrapper\Entities;

/**
 * Entidad para llamar al servicio AuthorizeAnswer
 *
 * @package SPSDecidirWrapper\Entities
 * @version 1.0.0
 */
class AuthorizeAnswer {
    /**
     * Identificador Privado del Requerimiento obtenido en la respuesta de la operación SendAuthorizeRequest. 
     * Nunca debe ser expuesto hacia el Web Browser. Solo será utilizado entre el Site y DECIDIR
     *
     *  @var string
     */
    public $RequestKey;

    /**
     * 
     *
     *  @var string
     */
    public $AnswerKey;

}
