<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cgt extends OracleEloquent
{
    use Compoships;

    protected $table = 'cgt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cgt_emp_cod', 'cgt_cnv_cod', 'cgt_str_solic', 'cgt_tp_guia', 'cgt_clinc_cir'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cgt_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['cgt_emp_cod'],
            ['emp_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cgt_str_solic'],
            ['str_cod'],
        );
    }
}
