<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnaDthr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cna_d_dthr_atend', 'cna_d_cna_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cna(): BelongsTo
    {
        return $this->belongsTo(
            Cna::class,
            ['cna_d_cna_id'],
            ['cna_id'],
        );
    }
}
