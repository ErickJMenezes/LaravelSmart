<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dem extends OracleEloquent
{
    use Compoships;

    protected $table = 'dem';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dem_emp_cod', 'dem_ded_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ded(): BelongsTo
    {
        return $this->belongsTo(
            Ded::class,
            ['dem_ded_cod'],
            ['ded_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['dem_emp_cod'],
            ['emp_cod'],
        );
    }
}
