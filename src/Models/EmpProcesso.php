<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpProcesso extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp_processo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_processo_emp_cod', 'emp_processo_tp_proc', 'emp_processo_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_processo_emp_cod'],
            ['emp_cod'],
        );
    }

    public function reinfStatus(): BelongsTo
    {
        return $this->belongsTo(
            ReinfStatus::class,
            ['emp_processo_status_env_reinf'],
            ['reinf_status_cod'],
        );
    }
}
