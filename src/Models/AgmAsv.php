<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AgmAsv extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['agm_a_med', 'agm_a_hini', 'agm_a_asv_id', 'agm_a_loc', 'agm_a_ext'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function asv(): BelongsTo
    {
        return $this->belongsTo(
            Asv::class,
            ['agm_a_asv_id'],
            ['asv_id'],
        );
    }
}
