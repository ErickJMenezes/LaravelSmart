<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cth extends OracleEloquent
{
    use Compoships;

    protected $table = 'cth';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cth_hsp_num', 'cth_pac_reg', 'cth_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cth_usr_login_lib', 'cth_lib_pag_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['cth_aih_cid_cod', 'cth_aih_cid_cod', 'cth_aih_cid_tip', 'cth_aih_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cth_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function fat(): BelongsTo
    {
        return $this->belongsTo(
            Fat::class,
            ['cth_fat_num', 'cth_fat_num', 'cth_fat_serie', 'cth_fat_serie'],
            ['fat_num', 'fat_serie', 'fat_num', 'fat_serie'],
        );
    }

    public function gmg(): BelongsTo
    {
        return $this->belongsTo(
            Gmg::class,
            ['cth_gmg_cod'],
            ['gmg_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['cth_hsp_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cth_aih_psv_solic', 'cth_aih_psv_realiz'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cth_aih_smk_cod_solic', 'cth_aih_smk_cod_solic', 'cth_aih_smk_tipo_solic', 'cth_aih_smk_tipo_solic', 'cth_aih_smk_cod_realiz', 'cth_aih_smk_cod_realiz', 'cth_aih_smk_tipo_realiz', 'cth_aih_smk_tipo_realiz'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
