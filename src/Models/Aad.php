<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Aad extends OracleEloquent
{
    use Compoships;

    protected $table = 'aad';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aad_dominio'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
