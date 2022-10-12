<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pvr extends OracleEloquent
{
    use Compoships;

    protected $table = 'pvr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pvr_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['pvr_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function cpi(): BelongsTo
    {
        return $this->belongsTo(
            Cpi::class,
            ['pvr_cpi_cod'],
            ['cpi_cod'],
        );
    }

    public function fat(): BelongsTo
    {
        return $this->belongsTo(
            Fat::class,
            ['pvr_fat_num', 'pvr_fat_num', 'pvr_fat_serie', 'pvr_fat_serie'],
            ['fat_num', 'fat_serie', 'fat_num', 'fat_serie'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['pvr_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function mccOld(): BelongsTo
    {
        return $this->belongsTo(
            MccOld::class,
            ['pvr_mcc_seq_dep', 'pvr_mcc_seq_dep', 'pvr_mcc_seq_dep', 'pvr_mcc_lote_dep', 'pvr_mcc_lote_dep', 'pvr_mcc_lote_dep', 'pvr_mcc_serie_dep', 'pvr_mcc_serie_dep', 'pvr_mcc_serie_dep'],
            ['mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote'],
        );
    }

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['pvr_nfl_num', 'pvr_nfl_num', 'pvr_nfl_serie', 'pvr_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }
}
