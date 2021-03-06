<?php
/**
 * ColocChannel
 *
 * @package hrm
 *
 * This file is part of the Huygens Remote Manager
 * Copyright and license notice: see license.txt
 */
namespace hrm\param;

use hrm\param\base\NumericalArrayParameter;

/**
 * A NumericalArrayParameter to represent the colocalization channel choice.
 *
 * @package hrm
 */
class ColocChannel extends NumericalArrayParameter
{

    /**
     * ColocChannel constructor.
     */
    public function __construct()
    {
        parent::__construct("ColocChannel");
    }

    /**
     * Checks whether the Parameter is valid.
     * @return bool True if the Parameter is valid, false otherwise.
     */
    public function check()
    {
        $this->message = '';
        $value = $this->internalValue();
        $result = True;

        /* Do not count empty elements. Do count channel '0'. */
        if (count(array_filter($value, 'strlen')) < 2) {
            $this->message = "Please select at least 2 channels.";
            $result = False;
        }
        return $result;
    }

    /**
     * Returns the string representation of the Parameter
     * @param int $numberOfChannels Numbeor of channels (ignored).
     * @return string String representation of the Parameter.
     */
    public function displayString($numberOfChannels = 0)
    {

        $result = $this->formattedName();

        /* Do not count empty elements. Do count channel '0'. */
        $channels = array_filter($this->value, 'strlen');
        $value = implode(", ", $channels);
        $result = $result . $value . "\n";

        return $result;
    }
}
