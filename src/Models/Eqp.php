<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eqp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['eqp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['eqp_manut_emp_cod'],
            ['emp_cod'],
        );
    }

    public function eqc(): BelongsTo
    {
        return $this->belongsTo(
            Eqc::class,
            ['eqp_eqc_cod'],
            ['eqc_cod'],
        );
    }

    public function gep(): BelongsTo
    {
        return $this->belongsTo(
            Gep::class,
            ['eqp_gep_cod'],
            ['gep_cod'],
        );
    }

    public function lmt(): BelongsTo
    {
        return $this->belongsTo(
            Lmt::class,
            ['eqp_lmt_cod', 'eqp_lmt_cod', 'eqp_str_cod', 'eqp_str_cod'],
            ['lmt_str_cod', 'lmt_cod', 'lmt_str_cod', 'lmt_cod'],
        );
    }

    public function prx(): BelongsTo
    {
        return $this->belongsTo(
            Prx::class,
            ['eqp_prx_cod'],
            ['prx_cod'],
        );
    }

    public function smt(): BelongsTo
    {
        return $this->belongsTo(
            Smt::class,
            ['eqp_smt_cod'],
            ['smt_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['eqp_str_cod'],
            ['str_cod'],
        );
    }
}
