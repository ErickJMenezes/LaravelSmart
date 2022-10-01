<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lta extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lta_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['lta_cnv_cod', 'lta_cnv_cod_mae'],
            ['cnv_cod', 'cnv_cod'],
        );
    }

    public function ltas(): HasMany
    {
        return $this->hasMany(
            Lta::class,
            ['lta_cod'],
            ['lta_lta_cod'],
        );
    }
}
