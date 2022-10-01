<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LabUsi extends OracleEloquent
{
    use Compoships;

    protected $table = 'lab_usi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lab_usi_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['lab_usi_emp_cod'],
            ['emp_cod'],
        );
    }
}
