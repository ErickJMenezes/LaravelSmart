<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcSaldoCliente extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc_saldo_cliente';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_sc_exc_id', 'exc_sc_emp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['exc_sc_emp_cod'],
            ['emp_cod'],
        );
    }

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['exc_sc_exc_id'],
            ['exc_id'],
        );
    }
}
