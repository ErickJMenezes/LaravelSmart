<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pdg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pdg_num', 'pdg_pac'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function apq(): BelongsTo
    {
        return $this->belongsTo(
            Apq::class,
            ['pdg_apq_cod', 'pdg_apq_cod', 'pdg_qst_cod', 'pdg_qst_cod'],
            ['apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod'],
        );
    }

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['pdg_cdg_num', 'pdg_cdg_num', 'pdg_cdg_serie', 'pdg_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['pdg_cid', 'pdg_cid', 'pdg_tip', 'pdg_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['pdg_med_ini', 'pdg_med_fim', 'pdg_psv_cod_assistente', 'pdg_psv_cod_referidor'],
            ['psv_cod', 'psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pdg_pac'],
            ['pac_reg'],
        );
    }

    public function sco(): BelongsTo
    {
        return $this->belongsTo(
            Sco::class,
            ['pdg_sco_id'],
            ['sco_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pdg_usr_login_alter', 'pdg_usr_login_reg'],
            ['usr_login', 'usr_login'],
        );
    }
}
