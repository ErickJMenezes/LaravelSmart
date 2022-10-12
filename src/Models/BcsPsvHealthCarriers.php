<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsPsvHealthCarriers extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_psv_health_carriers';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_psv_cod', 'bcs_health_carriers_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['bcs_psv_cod'],
            ['psv_cod'],
        );
    }
}
