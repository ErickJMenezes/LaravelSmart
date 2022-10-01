<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TRaimundor9465465Cex extends OracleEloquent
{
    use Compoships;

    protected $table = 't_raimundor_9465465_cex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
