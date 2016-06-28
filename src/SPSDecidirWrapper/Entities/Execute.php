<?php

namespace SPSDecidirWrapper\Entities;

/**
 * Entidad para llamar al servicio Execute
 *
 * @package SPSDecidirWrapper\Entities
 * @version 1.0.0
 */
class Execute {
    /**
     * 
     *
     *  @var string
     */
    public $Operation;
    
    /**
     * Payload
     * 
     * Documento codificado en el formato especificado en el campo EncodingMethod el cual contiene los datos de la transacción a Autorizar
     */
}
