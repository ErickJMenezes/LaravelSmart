<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mie extends OracleEloquent
{
    use Compoships;

    protected $table = 'mie';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mie_emp_cod', 'mie_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['mie_emp_cod'],
            ['emp_cod'],
        );
    }
}
