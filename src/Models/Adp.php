<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Adp extends OracleEloquent
{
    use Compoships;

    protected $table = 'adp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['adp_tipo', 'adp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['adp_bus_cod'],
            ['bus_cod'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['adp_cid_cod', 'adp_cid_cod', 'adp_cid_tip', 'adp_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function idx(): BelongsTo
    {
        return $this->belongsTo(
            Idx::class,
            ['adp_idx_n2', 'adp_idx_n2', 'adp_idx_n2', 'adp_idx_n1', 'adp_idx_n1', 'adp_idx_n1', 'adp_idx_tipo', 'adp_idx_tipo', 'adp_idx_tipo'],
            ['idx_n2', 'idx_n1', 'idx_tipo', 'idx_n2', 'idx_n1', 'idx_tipo', 'idx_n2', 'idx_n1', 'idx_tipo'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['adp_psv_cod_fila'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['adp_smk_cod', 'adp_smk_cod', 'adp_smk_tipo', 'adp_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['adp_tap_cod'],
            ['tap_cod'],
        );
    }
}
