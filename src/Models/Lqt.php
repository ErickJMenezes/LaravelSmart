<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lqt extends OracleEloquent
{
    use Compoships;

    protected $table = 'lqt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lqt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['lqt_sap_cod'],
            ['sap_cod'],
        );
    }
}
