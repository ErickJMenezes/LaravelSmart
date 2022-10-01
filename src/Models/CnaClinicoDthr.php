<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnaClinicoDthr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cna_c_cna_id', 'cna_c_dthr_clinico'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cna(): BelongsTo
    {
        return $this->belongsTo(
            Cna::class,
            ['cna_c_cna_id'],
            ['cna_id'],
        );
    }
}
