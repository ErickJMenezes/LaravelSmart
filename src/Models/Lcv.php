<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lcv extends OracleEloquent
{
    use Compoships;

    protected $table = 'lcv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lcv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lcv_sap_cod'],
            ['sap_cod'],
        );
    }
}
