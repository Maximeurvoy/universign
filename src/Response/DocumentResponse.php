<?php

namespace PierreBelin\Universign\Response;

class DocumentResponse extends Base
{

    public function __construct(\xmlrpcval $values)
    {
            $this->id = $this->parseValue($values, null);
    }

    protected $attributesTypes = [
        'id' => true,
    ];

    
}