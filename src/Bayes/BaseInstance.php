<?php

namespace Bayes;

class BaseInstance implements Instance
{

    /**
     *
     * @var Concept
     */
    protected $concept;

    /**
     *
     * @var array of string attributes
     */
    protected $attributes = array();

    public function __construct(Concept $concept, array $attributes)
    {
        $this->concept = $concept;
        $this->attributes = $attributes;
    }

    public function getAttributeByName($name)
    {
        
    }

    public function getAttributes()
    {
        $this->attributes;
    }

    public function getConcept()
    {
        return $this->concept;
    }

    public function setConcept(Concept $concept)
    {
        $this->concept = $concept;
    }

    public function show()
    {
        
    }

}