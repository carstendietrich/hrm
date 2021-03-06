<?php
/**
 * CMount
 *
 * @package hrm
 *
 * This file is part of the Huygens Remote Manager
 * Copyright and license notice: see license.txt
 */
namespace hrm\param;

use hrm\param\base\NumericalParameter;

/**
 * A NumericalParameter to represent the c-mount.
 *
 * @package hrm
 */
class CMount extends NumericalParameter {

    /**
     * CMount constructor.
     */
    public function __construct() {
        parent::__construct("CMount");
    }

    /**
     * Confirms that this is a Calculation Parameter.
     * @return bool Always true.
    */
    public function isForPixelSizeCalculation() {
        return True;
    }

    /**
     * Checks whether the Parameter is valid.
     * @return bool True if the Parameter is valid, false otherwise.
    */
    public function check( ) {
        $result = parent::check( );
        if ( $result == false ) {
            $this->message = "C-mount: " . $this->message;
        }
        return $result;
    }

}
