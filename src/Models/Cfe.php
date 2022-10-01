<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cfe extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cfe_cfo_cod', 'cfe_emp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['cfe_cfo_cod'],
            ['cfo_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['cfe_emp_cod'],
            ['emp_cod'],
        );
    }
}
