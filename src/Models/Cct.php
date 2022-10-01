<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cct extends OracleEloquent
{
    use Compoships;

    protected $table = 'cct';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cct_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cco(): BelongsTo
    {
        return $this->belongsTo(
            Cco::class,
            ['cct_cco_cod'],
            ['cco_cod'],
        );
    }

    public function ccts(): HasMany
    {
        return $this->hasMany(
            Cct::class,
            ['cct_cod'],
            ['cct_cod_trans'],
        );
    }

    public function epe(): BelongsTo
    {
        return $this->belongsTo(
            Epe::class,
            ['cct_epe_cod'],
            ['epe_cod'],
        );
    }

    public function hcc(): BelongsTo
    {
        return $this->belongsTo(
            Hcc::class,
            ['cct_hcc_cod_1', 'cct_hcc_cod_2', 'cct_hcc_cod_3', 'cct_hcc_cod_4', 'cct_hcc_cod_5', 'cct_hcc_cod_6'],
            ['hcc_cod', 'hcc_cod', 'hcc_cod', 'hcc_cod', 'hcc_cod', 'hcc_cod'],
        );
    }

    public function hdr(): BelongsTo
    {
        return $this->belongsTo(
            Hdr::class,
            ['cct_hdr_cod_1', 'cct_hdr_cod_2', 'cct_hdr_cod_3', 'cct_hdr_cod_4', 'cct_hdr_cod_5', 'cct_hdr_cod_6'],
            ['hdr_cod', 'hdr_cod', 'hdr_cod', 'hdr_cod', 'hdr_cod', 'hdr_cod'],
        );
    }
}
