<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpImp extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp_imp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_i_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_i_emp_cod'],
            ['emp_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['emp_i_str_cod_unid'],
            ['str_cod'],
        );
    }
}
