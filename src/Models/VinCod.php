<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VinCod extends OracleEloquent
{
    use Compoships;

    protected $table = 'vin_cod';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vin_c_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
