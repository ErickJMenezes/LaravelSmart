<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocEve extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function esoc(): BelongsTo
    {
        return $this->belongsTo(
            Esoc::class,
            ['esoc_eve_esoc_id'],
            ['esoc_id'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['esoc_eve_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
