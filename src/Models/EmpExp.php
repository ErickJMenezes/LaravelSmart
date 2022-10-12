<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpExp extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp_exp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_exp_emp_cod', 'emp_exp_dia'];

    protected $connection = 'smart';

    protected $guarded = [];
}
