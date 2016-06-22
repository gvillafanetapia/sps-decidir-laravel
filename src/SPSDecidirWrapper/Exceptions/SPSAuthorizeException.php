<?php

namespace SPSDecidirWrapper\Exceptions;

/**
 * SPS Decidir Exception.
 *
 * @package SPSDecidirWrapper\Exceptions
 * @version 1.0.0
 */
class SPSAuthorizeException extends \Exception
{
	/* TODO: MAP ERROR CODES */
    protected $errorMessages = array(
		
    );

    public function __construct($message, $code)
    {
        if (!array_key_exists($code, $this->errorMessages)) {
            throw new \Exception("Unknown SPS Decidir error code: $code");
        }

        parent::__construct($message . ' ' . $this->errorMessages[$code], $code);
    }
}
