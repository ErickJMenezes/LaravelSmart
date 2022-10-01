<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rgb extends OracleEloquent
{
    use Compoships;

    protected $table = 'rgb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rgb_psc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
