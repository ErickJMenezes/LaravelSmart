<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Agm extends OracleEloquent
{
    use Compoships;

    protected $table = 'agm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['agm_med', 'agm_hini', 'agm_loc', 'agm_ext'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['agm_smk', 'agm_smk', 'agm_tpsmk', 'agm_tpsmk'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['agm_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['agm_confirm_usr', 'agm_usr_login', 'agm_canc_usr_login'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['agm_adp_cod', 'agm_adp_cod', 'agm_adp_tipo', 'agm_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function bai(): BelongsTo
    {
        return $this->belongsTo(
            Bai::class,
            ['agm_bai_cde_cod', 'agm_bai_cde_cod', 'agm_bai_cod', 'agm_bai_cod'],
            ['bai_cde_cod', 'bai_cod', 'bai_cde_cod', 'bai_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['agm_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['agm_ctf', 'agm_ctf', 'agm_tpsmk', 'agm_tpsmk'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['agm_loc'],
            ['loc_cod'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['agm_canc_mot_cod', 'agm_canc_mot_cod', 'agm_canc_mot_tipo', 'agm_canc_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['agm_pac'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['agm_med', 'agm_aux'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['agm_esp_cod'],
            ['esp_cod'],
        );
    }
}
