<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocTrn extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc_trn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_trn_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
