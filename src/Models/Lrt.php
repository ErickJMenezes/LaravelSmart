<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lrt extends OracleEloquent
{
    use Compoships;

    protected $table = 'lrt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lrt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lrt_sap_cod'],
            ['sap_cod'],
        );
    }
}
