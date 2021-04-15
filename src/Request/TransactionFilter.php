<?php

namespace PierreBelin\Universign\Request;


class TransactionFilter extends Base
{

    // the status can be 
    // 0 Ready.
    // 1 Expired.
    // 2 Completed.
    // 3 Canceled.
    // 4 Failed.
    // 5 Pending RA Validation.

    protected $attributesTypes = [

        'status' => 'int',
    ];
}
