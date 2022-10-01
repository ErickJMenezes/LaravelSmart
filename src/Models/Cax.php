<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cax extends OracleEloquent
{
    use Compoships;

    protected $table = 'cax';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cax_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['cax_emp_cod'],
            ['emp_cod'],
        );
    }
}
