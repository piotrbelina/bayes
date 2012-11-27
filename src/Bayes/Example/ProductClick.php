<?php
namespace Bayes\Example;

use Bayes\BaseInstance;
use Bayes\BaseConcept;

class ProductClick extends BaseInstance
{
    public function __construct($query, $product)
    {
        $this->attributes['query'] = $query;
        $this->attributes['product'] = $product;
        
        $this->setConcept(new BaseConcept($product));
    }
    
    public function equals($other)
    {
        
    }
}