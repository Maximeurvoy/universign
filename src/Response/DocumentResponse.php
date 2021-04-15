<?php

namespace PierreBelin\Universign\Response;

class DocumentResponse extends Base
{
    protected $attributesTypes = [
        'id' => true,
    ];

    public function getId()
    {
        return $this->id;
    }
}