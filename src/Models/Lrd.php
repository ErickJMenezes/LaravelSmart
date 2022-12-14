<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lrd extends OracleEloquent
{
    use Compoships;

    protected $table = 'lrd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lrd_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lrd_sap_cod'],
            ['sap_cod'],
        );
    }
}
