<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Crt extends OracleEloquent
{
    use Compoships;

    protected $table = 'crt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['crt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['crt_emp_cod'],
            ['emp_cod'],
        );
    }
}
