<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rcc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rcc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['rcc_ccr_origem'],
            ['ccr_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['rcc_cfo_cod'],
            ['cfo_cod'],
        );
    }
}