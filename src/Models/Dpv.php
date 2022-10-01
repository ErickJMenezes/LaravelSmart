<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dpv extends OracleEloquent
{
    use Compoships;

    protected $table = 'dpv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dpv_cod_interno', 'dpv_dpr_int_bko_codigo', 'dpv_dpr_cod', 'dpv_emp_cod', 'dpv_cod_externo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dpr(): BelongsTo
    {
        return $this->belongsTo(
            Dpr::class,
            ['dpv_dpr_int_bko_codigo', 'dpv_dpr_int_bko_codigo', 'dpv_dpr_cod', 'dpv_dpr_cod'],
            ['dpr_int_bko_codigo', 'dpr_cod', 'dpr_int_bko_codigo', 'dpr_cod'],
        );
    }
}
