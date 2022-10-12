<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lme extends OracleEloquent
{
    use Compoships;

    protected $table = 'lme';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lme_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lme_sap_cod'],
            ['sap_cod'],
        );
    }
}
