<?php
namespace Bayes;

interface Concept
{
    public function getName();
    
    /**
     * @return Concept
     */
    public function getParent();
    
    /**
     * @return array Instances
     */
    public function getInstances();
}