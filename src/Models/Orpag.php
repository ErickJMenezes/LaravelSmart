<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Orpag extends OracleEloquent
{
    use Compoships;

    protected $table = 'orpag';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['orpag_tiss_guia', 'orpag_cnv_cod', 'orpag_str_solic', 'orpag_psv_cod_exe'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['orpag_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['orpag_emp_cod', 'orpag_emp_cod_solic'],
            ['emp_cod', 'emp_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['orpag_psv_cod_exe', 'orpag_psv_cod_destino', 'orpag_psv_sol_destino'],
            ['psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['orpag_str_solic'],
            ['str_cod'],
        );
    }
}
