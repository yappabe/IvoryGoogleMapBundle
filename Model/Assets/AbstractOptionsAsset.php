<?php

namespace Ivory\GoogleMapBundle\Model\Assets;

/**
 * Allow easy add of options for any class model that required it
 *
 * @author gelo
 */
abstract class AbstractOptionsAsset extends AbstractJavascriptVariableAsset
{
    /**
     * @var array Overlay options
     */
    protected $options = array();
    
    /**
     * Gets the overlay options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets the overlay options
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
        foreach($options as $option => $value)
            $this->setOption($option, $value);
    }

    /**
     * Gets a specific overlay option
     *
     * @param string $option
     * @return mixed
     */
    public function getOption($option)
    {
        if(is_string($option))
            return isset($this->options[$option]) ? $this->options[$option] : null;
        else
            throw new \InvalidArgumentException('The option property must be a string value.');
    }

    /**
     * Sets a specific overlay option
     *
     * @param string $option
     * @param mixed $value
     */
    public function setOption($option, $value)
    {
        if(is_string($option))
            $this->options[$option] = $value;
        else
            throw new \InvalidArgumentException('The option property must be a string value.');
    }
}