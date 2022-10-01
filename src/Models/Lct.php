<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lct extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lct_lote', 'lct_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bcp(): BelongsTo
    {
        return $this->belongsTo(
            Bcp::class,
            ['lct_bcp_num', 'lct_bcp_num', 'lct_bcp_serie', 'lct_bcp_serie'],
            ['bcp_num', 'bcp_serie', 'bcp_num', 'bcp_serie'],
        );
    }

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['lct_cpg_num', 'lct_cpg_num', 'lct_cpg_serie', 'lct_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['lct_cct_cod_deb', 'lct_cct_cod_cre'],
            ['cct_cod', 'cct_cod'],
        );
    }

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['lct_exc_id'],
            ['exc_id'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['lct_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['lct_mns_num', 'lct_mns_num', 'lct_mns_serie', 'lct_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lct_str_cod_deb', 'lct_str_cod_cre'],
            ['str_cod', 'str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lct_reg_usr_login'],
            ['usr_login'],
        );
    }

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['lct_nfs_numero', 'lct_nfs_numero', 'lct_nfs_numero', 'lct_nfs_serie', 'lct_nfs_serie', 'lct_nfs_serie', 'lct_nfs_tipo', 'lct_nfs_tipo', 'lct_nfs_tipo'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['lct_nfl_num', 'lct_nfl_num', 'lct_nfl_serie', 'lct_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }

    public function dmplDlpa(): BelongsTo
    {
        return $this->belongsTo(
            DmplDlpa::class,
            ['lct_dmpl_dlpa_codigo'],
            ['dmpl_dlpa_codigo'],
        );
    }
}
