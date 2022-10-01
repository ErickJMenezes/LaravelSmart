<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Vac extends OracleEloquent
{
    use Compoships;

    protected $table = 'vac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vac_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
