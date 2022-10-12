<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpUsr extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp_usr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_u_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_u_emp_cod'],
            ['emp_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['emp_u_usr_login'],
            ['usr_login'],
        );
    }
}
