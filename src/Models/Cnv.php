<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atv(): BelongsTo
    {
        return $this->belongsTo(
            Atv::class,
            ['cnv_so_atv_cod'],
            ['atv_cod'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['cnv_ccr_banco'],
            ['ccr_cod'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['cnv_cct_cod_trans'],
            ['cct_cod'],
        );
    }

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['cnv_cde_cod'],
            ['cde_cod'],
        );
    }

    public function cnvs(): HasMany
    {
        return $this->hasMany(
            Cnv::class,
            ['cnv_cod'],
            ['cnv_duplic_cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['cnv_emp_cod'],
            ['emp_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['cnv_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['cnv_psv_fat_default', 'cnv_so_psv_coord', 'cnv_so_psv_coord2'],
            ['psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['cnv_tab', 'cnv_tabm', 'cnv_base'],
            ['tab_cod', 'tab_cod', 'tab_cod'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['cnv_img_cod_logo'],
            ['img_cod'],
        );
    }
}
