<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Str extends OracleEloquent
{
    use Compoships;

    protected $table = 'str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsr(): BelongsTo
    {
        return $this->belongsTo(
            Hsr::class,
            ['str_hsr_cod_3', 'str_hsr_cod_1', 'str_hsr_cod_2', 'str_hsr_cod_4', 'str_hsr_cod_5', 'str_hsr_cod_6'],
            ['hsr_cod', 'hsr_cod', 'hsr_cod', 'hsr_cod', 'hsr_cod', 'hsr_cod'],
        );
    }

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['str_qst_cod'],
            ['qst_cod'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['str_tab_cod'],
            ['tab_cod'],
        );
    }

    public function strs(): HasMany
    {
        return $this->hasMany(
            Str::class,
            ['str_cod', 'str_cod', 'str_cod', 'str_cod', 'str_cod', 'str_cod'],
            ['str_atend', 'str_duplic_str_cod', 'str_rn_str_cod', 'str_rota_str_cod', 'str_str_cod', 'str_trak_str_loc_atd'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['str_cc'],
            ['ccr_cod'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['str_cct_cod_receita'],
            ['cct_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['str_emp_cod'],
            ['emp_cod'],
        );
    }

    public function epe(): BelongsTo
    {
        return $this->belongsTo(
            Epe::class,
            ['str_epe_cod'],
            ['epe_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['str_resp', 'str_psv_def'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function rot(): BelongsTo
    {
        return $this->belongsTo(
            Rot::class,
            ['str_rot_cod'],
            ['rot_cod'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['str_img_cod'],
            ['img_cod'],
        );
    }
}
