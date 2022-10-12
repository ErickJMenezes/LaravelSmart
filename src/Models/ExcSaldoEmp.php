<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcSaldoEmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc_saldo_emp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_se_exc_id', 'exc_se_emp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['exc_se_emp_cod'],
            ['emp_cod'],
        );
    }

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['exc_se_exc_id'],
            ['exc_id'],
        );
    }
}
