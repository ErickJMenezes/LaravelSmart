<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Smk extends OracleEloquent
{
    use Compoships;

    protected $table = 'smk';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smk_tipo', 'smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['smk_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['smk_ctf', 'smk_ctf', 'smk_tipo', 'smk_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function cvitaTipoExame(): BelongsTo
    {
        return $this->belongsTo(
            CvitaTipoExame::class,
            ['smk_cvita_tipo_exame_id'],
            ['cvita_tipo_exame_id'],
        );
    }

    public function mdc(): BelongsTo
    {
        return $this->belongsTo(
            Mdc::class,
            ['smk_ind_dicom'],
            ['mdc_cod'],
        );
    }

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['smk_gih_edl_default'],
            ['edl_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['smk_terc_emp_cod'],
            ['emp_cod'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['smk_esp_cod'],
            ['esp_cod'],
        );
    }

    public function eti(): BelongsTo
    {
        return $this->belongsTo(
            Eti::class,
            ['smk_eti_cod'],
            ['eti_cod'],
        );
    }

    public function smks(): HasMany
    {
        return $this->hasMany(
            Smk::class,
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
            ['smk_generico_cod', 'smk_generico_cod', 'smk_generico_tipo', 'smk_generico_tipo', 'smk_smk_indiv_cod', 'smk_smk_indiv_cod', 'smk_smk_indiv_tipo', 'smk_smk_indiv_tipo', 'smk_vdf_smk_cod', 'smk_vdf_smk_cod', 'smk_vdf_smk_tipo', 'smk_vdf_smk_tipo'],
        );
    }

    public function gss(): BelongsTo
    {
        return $this->belongsTo(
            Gss::class,
            ['smk_gss_cod'],
            ['gss_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['smk_psv_exe_default'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['smk_str'],
            ['str_cod'],
        );
    }
}
