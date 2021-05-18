<?php

namespace PierreBelin\Universign\Request;
// require_once dirname(__DIR__) . '/Base.php';

// permet de faire apparaitre le champ de signature signé sur le documents
class DocSignatureField extends Base
{
    protected $attributesTypes = [
        'name' => 'string',
        'page' => 'int',
        'x' => 'int',
        'y' => 'int',
        'signerIndex' =>'int',
    ];
}