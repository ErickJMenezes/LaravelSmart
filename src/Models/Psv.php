<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Psv extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['psv_emp_cod_dest', 'psv_emp_cod'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['psv_cc'],
            ['ccr_cod'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['psv_cct_cod'],
            ['cct_cod'],
        );
    }

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['psv_cde_cod', 'psv_naturalidade_cde_cod'],
            ['cde_cod', 'cde_cod'],
        );
    }

    public function cer(): BelongsTo
    {
        return $this->belongsTo(
            Cer::class,
            ['psv_cer_cod'],
            ['cer_cod'],
        );
    }

    public function coj(): BelongsTo
    {
        return $this->belongsTo(
            Coj::class,
            ['psv_coj_cod'],
            ['coj_cod'],
        );
    }

    public function ecd(): BelongsTo
    {
        return $this->belongsTo(
            Ecd::class,
            ['psv_ecd_cod'],
            ['ecd_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['psv_fila_smk_cod', 'psv_fila_smk_cod', 'psv_fila_smk_tipo', 'psv_fila_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function gmr(): BelongsTo
    {
        return $this->belongsTo(
            Gmr::class,
            ['psv_gmr_cod'],
            ['gmr_cod'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['psv_img_cod_foto', 'psv_img_cod_assinat'],
            ['img_cod', 'img_cod'],
        );
    }

    public function psvs(): HasMany
    {
        return $this->hasMany(
            Psv::class,
            ['psv_cod', 'psv_cod'],
            ['psv_preceptor_psv_cod', 'psv_psv_cod_fila'],
        );
    }

    public function rac(): BelongsTo
    {
        return $this->belongsTo(
            Rac::class,
            ['psv_rac_cod'],
            ['rac_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['psv_str_cod'],
            ['str_cod'],
        );
    }

    public function vinCod(): BelongsTo
    {
        return $this->belongsTo(
            VinCod::class,
            ['psv_vin_c_cod'],
            ['vin_c_cod'],
        );
    }

    public function vinSub(): BelongsTo
    {
        return $this->belongsTo(
            VinSub::class,
            ['psv_vin_s_cod', 'psv_vin_s_cod', 'psv_vin_s_cod', 'psv_vin_t_cod', 'psv_vin_t_cod', 'psv_vin_t_cod', 'psv_vin_c_cod', 'psv_vin_c_cod', 'psv_vin_c_cod'],
            ['vin_s_vin_c_cod', 'vin_s_vin_t_cod', 'vin_s_cod', 'vin_s_vin_c_cod', 'vin_s_vin_t_cod', 'vin_s_cod', 'vin_s_vin_c_cod', 'vin_s_vin_t_cod', 'vin_s_cod'],
        );
    }

    public function vinTipo(): BelongsTo
    {
        return $this->belongsTo(
            VinTipo::class,
            ['psv_vin_t_cod', 'psv_vin_t_cod', 'psv_vin_c_cod', 'psv_vin_c_cod'],
            ['vin_t_vin_c_cod', 'vin_t_cod', 'vin_t_vin_c_cod', 'vin_t_cod'],
        );
    }
}
