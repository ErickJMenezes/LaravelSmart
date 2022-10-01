<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rco extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rco_cod', 'rco_tro_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tro(): BelongsTo
    {
        return $this->belongsTo(
            Tro::class,
            ['rco_tro_cod'],
            ['tro_cod'],
        );
    }
}
