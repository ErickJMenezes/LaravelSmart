<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpTspeed extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp_tspeed';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_tspeed_emp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_tspeed_emp_cod'],
            ['emp_cod'],
        );
    }
}
