<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpTv extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp_tv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_t_emp_cod', 'emp_t_dt_ini'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_t_emp_cod'],
            ['emp_cod'],
        );
    }
}
