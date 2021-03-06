<?php
/**
 * AberrationCorrectionMode
 *
 * @package hrm
 *
 * This file is part of the Huygens Remote Manager
 * Copyright and license notice: see license.txt
 */
namespace hrm\param;

use hrm\param\base\ChoiceParameter;

/**
 * A ChoiceParameter to indicate the mode of aberration correction.
 *
 * @package hrm
 */
class AberrationCorrectionMode extends ChoiceParameter {

    /**
     * AberrationCorrectionMode constructor.
     */
    public function __construct() {
        parent::__construct("AberrationCorrectionMode");
    }

    /**
     * Confirms that this is a Correction Parameter
     * @return bool Always true.
    */
    public function isForCorrection() {
        return True;
    }

}
