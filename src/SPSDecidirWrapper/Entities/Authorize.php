<?php

namespace SPSDecidirWrapper\Entities;

/**
 * Entidad para llamar al servicio Authorize
 *
 * @package SPSDecidirWrapper\Entities
 * @version 1.0.0
 */
class Authorize
{	
    /**
     * Payload
	 * 
     * Documento codificado en el formato especificado en el campo EncodingMethod el cual contiene los datos de la transacción a Autorizar
	 */
    
	/** 
	 * Identificación unívocamente de la transacción para el Comercio. Debe ser distinto para cada operación.
	 *
     *  @var string
     */
    public $NROOPERACION;
	/** 
	 * Importe en Pesos de la transacción.
	 *
     *  @var string
     */
    public $MONTO;
	/** 
	 * Cantidad de cuotas en las que se realizaá el pago
	 *
     *  @var string
     */
    public $CUOTAS;
	/** 
	 * Valor que identifica al medio de pago seleccionado por el usuario para realizar la transacción.
	 *
     *  @var string
     */
    public $MEDIODEPAGO;
	/** 
	 * El comercio deberá enviar a DECIDIR el email del cliente. Esta dirección se utilizará para enviar el mail de confirmación de la compra al cliente.
	 *
     *  @var string
     */
    public $EMAILCLIENTE;
	/** 
	 * Los primeros 6 dígitos de la tarjeta que permiten identificar la marca de tarjeta y el banco emisor de la misma. Se envian para la configuración de promociones por BIN heredado.
	 *
     *  @var string
     */
    public $BIN;
}
