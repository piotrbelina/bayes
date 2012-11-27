<?php

namespace Bayes;

class BaseConcept implements Concept
{

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var BaseConcept
     */
    protected $parent;

    /**
     *
     * @var array of Instances
     */
    protected $instances = array();

    public function __construct($name, BaseConcept $parent = null)
    {
        $this->name = $name;
        $this->parent = $parent;
    }
    
    public function addInstance(Instance $instance)
    {
        $this->instances[] = $instance;
    }

    public function getInstances()
    {
        return $this->instances;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getParent()
    {
        return $this->parent;
    }
    
    public function setParent(BaseConcept $parent)
    {
        $this->parent = $parent;
    }
    
    public function equals($obj)
    {
        if ($this === $obj) {
            return true;
    	}

    	if ( !($obj instanceof BaseConcept) ) {
            return false;
    	}

        if ($this->name == null) {
            if ($obj->name != null) {
                return false;
            }
        } else if (!$this->name == $obj->name) {
            return false;
        }
        
        if ($this->parent == null) {
            if ($obj->parent != null) {
                return false;
            }
        } else if (!$this->parent == ($obj->parent)) {
            return false;
        }
        
        return true;
    }

}