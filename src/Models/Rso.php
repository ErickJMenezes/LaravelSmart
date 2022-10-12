<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rso extends OracleEloquent
{
    use Compoships;

    protected $table = 'rso';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rso_lta_cod', 'rso_tipo', 'rso_dthr_ini', 'rso_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['rso_lta_cod'],
            ['lta_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rso_psv_cod'],
            ['psv_cod'],
        );
    }
}
