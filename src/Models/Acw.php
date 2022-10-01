<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Acw extends OracleEloquent
{
    use Compoships;

    protected $table = 'acw';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['acw_guid'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
