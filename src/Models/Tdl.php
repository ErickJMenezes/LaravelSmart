<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tdl extends OracleEloquent
{
    use Compoships;

    protected $table = 'tdl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tdl_num', 'tdl_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['tdl_psv_cod_enf', 'tdl_psv_cod_fis', 'tdl_psv_cod_nut', 'tdl_psv_cod_pis', 'tdl_psv_cod'],
            ['psv_cod', 'psv_cod', 'psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['tdl_cid_cod', 'tdl_cid_cod', 'tdl_cid_tip', 'tdl_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['tdl_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['tdl_emp_destino'],
            ['emp_cod'],
        );
    }

    public function hcMob(): BelongsTo
    {
        return $this->belongsTo(
            HcMob::class,
            ['tdl_hc_mob_id'],
            ['hc_mob_id'],
        );
    }

    public function kmt(): BelongsTo
    {
        return $this->belongsTo(
            Kmt::class,
            ['tdl_kmt_cod'],
            ['kmt_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['tdl_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['tdl_str_unid'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['tdl_reg_usr_login_ini', 'tdl_reg_usr_login_fim'],
            ['usr_login', 'usr_login'],
        );
    }
}
