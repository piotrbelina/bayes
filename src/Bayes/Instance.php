<?php
namespace Bayes;

interface Instance
{
    public function getAttributes();
    public function getConcept();
    public function show();
    public function getAttributeByName($name);
    
}