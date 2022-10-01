<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lmed extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lmed_adp_cod', 'lmed_adp_tipo', 'lmed_num', 'lmed_asc'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bmo(): BelongsTo
    {
        return $this->belongsTo(
            Bmo::class,
            ['lmed_bmo_cod'],
            ['bmo_cod'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['lmed_unidqt', 'lmed_unid'],
            ['bun_cod', 'bun_cod'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['lmed_uso'],
            ['bus_cod'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['lmed_via'],
            ['bvi_cod'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['lmed_tap_cod'],
            ['tap_cod'],
        );
    }
}
