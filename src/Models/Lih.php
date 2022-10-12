<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lih extends OracleEloquent
{
    use Compoships;

    protected $table = 'lih';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lih_num', 'lih_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['lih_cid_cod_1', 'lih_cid_cod_1', 'lih_cid_tip_1', 'lih_cid_tip_1', 'lih_cid_cod_2', 'lih_cid_cod_2', 'lih_cid_tip_2', 'lih_cid_tip_2', 'lih_cid_cod_ass', 'lih_cid_cod_ass', 'lih_cid_tip_ass', 'lih_cid_tip_ass'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['lih_emp_cod_origem', 'lih_emp_cod_destino'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['lih_loc_cod'],
            ['loc_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['lih_pac_reg'],
            ['pac_reg'],
        );
    }

    public function lihProb(): BelongsTo
    {
        return $this->belongsTo(
            LihProb::class,
            ['lih_tipo_problema'],
            ['lih_p_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['lih_psv_cod_solic', 'lih_psv_cod_super', 'lih_psv_cod_junta'],
            ['psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['lih_sol_smk_cod', 'lih_sol_smk_cod', 'lih_sol_smk_tipo', 'lih_sol_smk_tipo', 'lih_aut_smk_cod', 'lih_aut_smk_cod', 'lih_aut_smk_tipo', 'lih_aut_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lih_usr_login_emis'],
            ['usr_login'],
        );
    }
}
