<?php

namespace Bayes;

use Monolog\Logger;

class Classifier
{
	protected $logger;

	protected $trainingSet;

	public function __construct()
	{
		$this->logger = new Logger('bayes');
	}

	public function setTrainingSet(TrainingSet $trainingSet)
	{
		$this->trainingSet = $trainingSet;
	}

	public function getTrainingSet()
	{
		return $this->trainingSet;
	}

	public function train()
	{
		$this->calculateConceptPriors();
		$this->calculateConditionalProbabilities();
	}

	public function calculateConceptPriors()
	{
		$this->logger->debug('Calculating concept priors');
	}

	public function calculateConditionalProbabilities()
	{
		$this->logger->debug('Calculating conditional probabilities');
	}
}