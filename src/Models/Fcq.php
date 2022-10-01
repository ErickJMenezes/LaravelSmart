<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fcq extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fcq_fne_cod', 'fcq_mat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['fcq_fne_cod'],
            ['fne_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['fcq_mat_cod'],
            ['mat_cod'],
        );
    }
}
