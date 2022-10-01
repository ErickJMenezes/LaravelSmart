<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Yajra\Oci8\Eloquent\OracleEloquent;

class AbcFarma extends OracleEloquent
{
    use Compoships;

    protected $table = 'abc_farma';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['med_abc'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
