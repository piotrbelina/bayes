<?php

namespace Bayes;

use Monolog\Logger;

class Classifier
{

    /**
     *
     * @var Monolog\Logger;
     */
    protected $logger;
    protected $trainingSet;
    protected $conceptPriors = array();
    protected $attributeList;

    public function __construct(TrainingSet $trainingSet)
    {
        $this->logger = new Logger('classifier');
        $this->trainingSet = $trainingSet;
    }

    public function train()
    {
        if ($this->attributeList == null || count($this->attributeList) == 0) {
            throw new \LogicException('Cannot train without the attributes');
        }
        
        $start = microtime(true);

        $this->calculateConceptPriors();
        $this->calculateConditionalProbabilities();
        
        $this->logger->debug('Trained in ' . (microtime(true) - $start));
    }
    
    public function trainOnAttribute($attributeName)
    {
        $this->attributeList[] = $attributeName;
    }

    public function calculateConceptPriors()
    {
        $this->logger->debug('Calculating concept priors');

        /* @var $concept Concept */
        foreach ($this->trainingSet->getConcepts() as $concept) {
            $conceptCount = 0;
            
            foreach ($this->trainingSet->getInstances() as $instance) {
                if ($instance->getConcept()->equals($concept)) {
                    $conceptCount++;
                }
            }
            
            $this->conceptPriors[spl_object_hash($concept)] = $conceptCount;
        }
        print_r($this);
    }

    public function calculateConditionalProbabilities()
    {
        $this->logger->debug('Calculating conditional probabilities');
    }

}