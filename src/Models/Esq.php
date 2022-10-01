<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Esq extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['esq_adp_tipo', 'esq_num', 'esq_asc', 'esq_adp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['esq_adp_cod', 'esq_adp_cod', 'esq_adp_tipo', 'esq_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function bmo(): BelongsTo
    {
        return $this->belongsTo(
            Bmo::class,
            ['esq_bmo_cod'],
            ['bmo_cod'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['esq_unidqt', 'esq_unid'],
            ['bun_cod', 'bun_cod'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['esq_uso'],
            ['bus_cod'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['esq_via'],
            ['bvi_cod'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['esq_tap_cod'],
            ['tap_cod'],
        );
    }
}
