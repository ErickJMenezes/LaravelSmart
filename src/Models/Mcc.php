<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mcc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mcc_serie', 'mcc_seq', 'mcc_lote'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['mcc_ccr'],
            ['ccr_cod'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['mcc_mns_num', 'mcc_mns_num', 'mcc_mns_serie', 'mcc_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['mcc_cct_cod', 'mcc_cct_cpg_repasse'],
            ['cct_cod', 'cct_cod'],
        );
    }

    public function ipg(): BelongsTo
    {
        return $this->belongsTo(
            Ipg::class,
            ['mcc_ipg_parc', 'mcc_ipg_parc', 'mcc_ipg_parc', 'mcc_cpg_num', 'mcc_cpg_num', 'mcc_cpg_num', 'mcc_cpg_serie', 'mcc_cpg_serie', 'mcc_cpg_serie'],
            ['ipg_parc', 'ipg_cpg_num', 'ipg_cpg_serie', 'ipg_parc', 'ipg_cpg_num', 'ipg_cpg_serie', 'ipg_parc', 'ipg_cpg_num', 'ipg_cpg_serie'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['mcc_cfo_cod', 'mcc_cfo_estorno'],
            ['cfo_cod', 'cfo_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['mcc_cnv'],
            ['cnv_cod'],
        );
    }

    public function fat(): BelongsTo
    {
        return $this->belongsTo(
            Fat::class,
            ['mcc_fat_serie', 'mcc_fat_serie', 'mcc_fat_num', 'mcc_fat_num'],
            ['fat_num', 'fat_serie', 'fat_num', 'fat_serie'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['mcc_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function mccs(): HasMany
    {
        return $this->hasMany(
            Mcc::class,
            ['mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote', 'mcc_serie', 'mcc_seq', 'mcc_lote'],
            ['mcc_mcc_seq_dep_card', 'mcc_mcc_seq_dep_card', 'mcc_mcc_seq_dep_card', 'mcc_mcc_lote_dep_card', 'mcc_mcc_lote_dep_card', 'mcc_mcc_lote_dep_card', 'mcc_mcc_serie_dep_card', 'mcc_mcc_serie_dep_card', 'mcc_mcc_serie_dep_card'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['mcc_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mcc_usr_login'],
            ['usr_login'],
        );
    }

    public function bcp(): BelongsTo
    {
        return $this->belongsTo(
            Bcp::class,
            ['mcc_bcp_num', 'mcc_bcp_num', 'mcc_bcp_serie', 'mcc_bcp_serie'],
            ['bcp_num', 'bcp_serie', 'bcp_num', 'bcp_serie'],
        );
    }
}
