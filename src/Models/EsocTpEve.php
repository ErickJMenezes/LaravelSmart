<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocTpEve extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc_tp_eve';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_tp_eve_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
