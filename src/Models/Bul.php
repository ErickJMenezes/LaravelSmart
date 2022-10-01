<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bul extends OracleEloquent
{
    use Compoships;

    protected $table = 'bul';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bul_med'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function buls(): HasMany
    {
        return $this->hasMany(
            Bul::class,
            ['bul_med'],
            ['bul_bul_med_dil'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['bul_unid', 'bul_apr'],
            ['bun_cod', 'bun_cod'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['bul_uso'],
            ['bus_cod'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['bul_via'],
            ['bvi_cod'],
        );
    }

    public function idx(): BelongsTo
    {
        return $this->belongsTo(
            Idx::class,
            ['bul_idx', 'bul_idx', 'bul_idx', 'bul_farm2', 'bul_farm2', 'bul_farm2', 'bul_farm1', 'bul_farm1', 'bul_farm1'],
            ['idx_n2', 'idx_n1', 'idx_tipo', 'idx_n2', 'idx_n1', 'idx_tipo', 'idx_n2', 'idx_n1', 'idx_tipo'],
        );
    }

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['bul_qst_cod'],
            ['qst_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['bul_smk_cod', 'bul_smk_cod', 'bul_smk_tipo', 'bul_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
