<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cap extends OracleEloquent
{
    use Compoships;

    protected $table = 'cap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cap_pac_reg', 'cap_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['cap_q_adp_cod', 'cap_q_adp_cod', 'cap_q_adp_tipo', 'cap_q_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['cap_cid_cod', 'cap_cid_cod', 'cap_cid_tip', 'cap_cid_tip', 'cap_cid_cod_2', 'cap_cid_cod_2', 'cap_cid_tip_2', 'cap_cid_tip_2', 'cap_cid_cod_3', 'cap_cid_cod_3', 'cap_cid_tip_3', 'cap_cid_tip_3', 'cap_cid_cod_4', 'cap_cid_cod_4', 'cap_cid_tip_4', 'cap_cid_tip_4'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cap_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['cap_emp_cod_hosp'],
            ['emp_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['cap_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function hspProced(): BelongsTo
    {
        return $this->belongsTo(
            HspProced::class,
            ['cap_hsp_proced_cod'],
            ['hsp_p_cod'],
        );
    }

    public function mpe(): BelongsTo
    {
        return $this->belongsTo(
            Mpe::class,
            ['cap_mpe_cod'],
            ['mpe_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['cap_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cap_psv_assist', 'cap_psv_farmaceutico'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function qmod(): BelongsTo
    {
        return $this->belongsTo(
            Qmod::class,
            ['cap_q_qmod_cod'],
            ['qmod_cod'],
        );
    }

    public function sat(): BelongsTo
    {
        return $this->belongsTo(
            Sat::class,
            ['cap_sat_cod'],
            ['sat_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cap_str_solic'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cap_usr_login_ini', 'cap_usr_login_fim', 'cap_usr_login_resp'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }

    public function qclas(): BelongsTo
    {
        return $this->belongsTo(
            Qclas::class,
            ['cap_q_qclas_cod'],
            ['qclas_cod'],
        );
    }

    public function qplan(): BelongsTo
    {
        return $this->belongsTo(
            Qplan::class,
            ['cap_q_qplan_cod'],
            ['qplan_cod'],
        );
    }
}
