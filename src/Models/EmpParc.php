<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EmpParc extends OracleEloquent
{
    use Compoships;

    protected $table = 'emp_parc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['emp_parc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['emp_parc_emp_cod', 'emp_parc_parceiro'],
            ['emp_cod', 'emp_cod'],
        );
    }
}
