<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | URL del contrato de servicio de producción
    |--------------------------------------------------------------------------
    | Provista por SPS Decidir. Define la URL a la cual se va a conectar en 
    | modo producción (dev = false).
    |
    */

    'wsdl' => 'https://sps.decidir.com/services/t/1.1/Authorize?wsdl',

    /*
    |--------------------------------------------------------------------------
    | URL del contrato de servicio de sandbox
    |--------------------------------------------------------------------------
    | Provista por SPS Decidir. Define la URL a la cual se va a conectar en 
    | modo de desarrollo (dev = true).
    |
    */

    'dev_wsdl' => 'https://sandbox.decidir.com/services/t/1.1/Authorize?wsdl',
	
	 /*
    |--------------------------------------------------------------------------
    | URL del endpoint de producción
    |--------------------------------------------------------------------------
    | Provista por SPS Decidir. Define la URL a la cual se va a conectar en 
    | modo producción (dev = false).
    |
    */

    'endpoint' => 'https://sps.decidir.com/services/t/1.1/Authorize',

    /*
    |--------------------------------------------------------------------------
    | URL del endpoint de sandbox
    |--------------------------------------------------------------------------
    | Provista por SPS Decidir. Define la URL a la cual se va a conectar en 
    | modo de desarrollo (dev = true).
    |
    */

    'dev_endpoint' => 'https://sandbox.decidir.com/services/t/1.1/Authorize.AuthorizeHttpSoap11Endpoint',

    /*
    |--------------------------------------------------------------------------
    | Modo de desarrollo
    |--------------------------------------------------------------------------
    | Define si se esta trabajado en modo desarrollo (true), o modo producción
    | (false). 
    |
    */

    'dev' => false,

    /*
    |--------------------------------------------------------------------------
    | Token de seguridad
    |--------------------------------------------------------------------------
    | Provisto por SPS Decidir. 
	| Se envía en el header del mensaje HTTP.
    |
    */

    'auth_token' => '',

    /*
    |--------------------------------------------------------------------------
    | Código de comercio
    |--------------------------------------------------------------------------
    | Código provisto por SPS Decidir.
    | Se envía en el mensaje en el campo 'Merchant'.
    |
    */

    'merchant_id' => '',

    /*
    |--------------------------------------------------------------------------
    | URL de retorno exitoso
    |--------------------------------------------------------------------------
    | URL a la cual debe devolver SPS al cliente si la transacción es exitosa.
    | Se envía en el mensaje en el campo 'URL_OK'.
    |
    */

    'success_redirect_url' => '',

    /*
    |--------------------------------------------------------------------------
    | URL de retorno fallido
    |--------------------------------------------------------------------------
    | URL a la cual debe devolver SPS al cliente si la transacción falla.
    | Se envía en el mensaje en el campo 'URL_Error'.
    |
    */

    'error_redirect_url' => '',

    /*
    |--------------------------------------------------------------------------
    | Método de codificación
    |--------------------------------------------------------------------------
    | Especifica el tipo de codificación que se usa para los datos de la 
	| transacciones de pagos (Siempre debe ser XML, este campo está para 
	| futuras implementaciones).
    | Se envía en el mensaje en el campo 'EncodingMethod'.
    | 
    |
    */

    'encoding' => 'xml',

    /*
    |--------------------------------------------------------------------------
    | Formas de pago 
    |--------------------------------------------------------------------------
    | Tabla con los medios de pago
    | 
    |
    */

    'payment' => [
		'PAGO FACIL' => 25,
		'TARJETA NEVADA' => 39,
		'TARJETA NATIVA' => 42,
		'TARJETA AMERICAN EXPRESS' => 6, //o 65 para terminales múltiples
		'TARJETA CABAL' => 27,
		'TARJETA DINERS' => 8,
		'TARJETA NARANJA' => 24,
		'TARSHOP' => 23,
		'TARJETA PATAGONIA 365' => 55,
		'TARJETA CENCOSUD' => 43,
		'TARJETA VISA' => 1,
		'TARJETA SHOPPING' => 23,
		'TARJETA MASTERCARD' => 15 //o 20 para test
	]
);
