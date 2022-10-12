<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ipr extends OracleEloquent
{
    use Compoships;

    protected $table = 'ipr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ipr_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['ipr_cct_cod_resultado', 'ipr_cct_cod_provisao', 'ipr_cct_cod_recolhimento', 'ipr_cct_cod_a_reter'],
            ['cct_cod', 'cct_cod', 'cct_cod', 'cct_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['ipr_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['ipr_emp_cod_padrao', 'ipr_emp_cod_recolhimento'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['ipr_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ipr_str_cod_centro'],
            ['str_cod'],
        );
    }
}
