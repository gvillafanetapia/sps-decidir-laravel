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
     * Documento codificado en el formato especificado en el campo EncodingMethod el cual contiene los datos de la transacci�n a Autorizar
	 */
    
	/** 
	 * Identificaci�n un�vocamente de la transacci�n para el Comercio. Debe ser distinto para cada operaci�n.
	 *
     *  @var string
     */
    public $NROOPERACION;
	/** 
	 * Importe en Pesos de la transacci�n.
	 *
     *  @var string
     */
    public $MONTO;
	/** 
	 * Cantidad de cuotas en las que se realiza� el pago
	 *
     *  @var string
     */
    public $CUOTAS;
	/** 
	 * Valor que identifica al medio de pago seleccionado por el usuario para realizar la transacci�n.
	 *
     *  @var string
     */
    public $MEDIODEPAGO;
	/** 
	 * El comercio deber� enviar a DECIDIR el email del cliente. Esta direcci�n se utilizar� para enviar el mail de confirmaci�n de la compra al cliente.
	 *
     *  @var string
     */
    public $EMAILCLIENTE;
	/** 
	 * Los primeros 6 d�gitos de la tarjeta que permiten identificar la marca de tarjeta y el banco emisor de la misma. Se envian para la configuraci�n de promociones por BIN heredado.
	 *
     *  @var string
     */
    public $BIN;
}
