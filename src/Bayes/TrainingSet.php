<?php
namespace Bayes;

class TrainingSet
{
	protected $instances = array();

	public function __construct(array $instances)
	{
		$this->instances = $instances;
	}
}
