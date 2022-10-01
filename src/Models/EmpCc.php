<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpCc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['emp_cc_emp_cod', 'emp_cc_banco', 'emp_cc_conta', 'emp_cc_agencia'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_cc_emp_cod'],
            ['emp_cod'],
        );
    }
}
