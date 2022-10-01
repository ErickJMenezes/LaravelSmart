<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PceDes extends OracleEloquent
{
    use Compoships;

    protected $table = 'pce_des';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['p_des_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['p_des_emp_cod'],
            ['emp_cod'],
        );
    }
}
