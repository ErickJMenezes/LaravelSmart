<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fcm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fcm_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['fcm_fne_cod'],
            ['fne_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['fcm_emp_cod'],
            ['emp_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['fcm_mat_cod'],
            ['mat_cod'],
        );
    }
}
