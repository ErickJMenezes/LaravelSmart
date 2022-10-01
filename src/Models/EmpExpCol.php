<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpExpCol extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['emp_exp_col_emp_cod', 'emp_exp_col_dia'];

    protected $connection = 'oracle';

    protected $guarded = [];
}