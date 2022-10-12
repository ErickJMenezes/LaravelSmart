<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Agw extends OracleEloquent
{
    use Compoships;

    protected $table = 'agw';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['agw_tpctf', 'agw_dthr_ini', 'agw_med', 'agw_loc', 'agw_ctf'];

    protected $connection = 'smart';

    protected $guarded = [];
}
