<?php

namespace Bayes;

class TrainingSet
{

    protected $instances = array();
    protected $concepts = array();

    public function __construct(array $instances)
    {
        $this->instances = $instances;

        foreach ($this->instances as $instance) {
            if (!($instance instanceof Instance)) {
                throw new \LogicException($instance . ' is not a Instance');
            }
            if (!in_array($instance, $this->concepts)) {
                $this->concepts[] = $instance;
            }
        }
    }

    public function getConcepts()
    {
        return $this->concepts;
    }

    public function getInstances()
    {
        return $this->instances;
    }

}
