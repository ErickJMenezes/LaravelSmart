<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AgmSus extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['agm_s_med', 'agm_s_loc', 'agm_s_ext', 'agm_s_hini'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function agm(): BelongsTo
    {
        return $this->belongsTo(
            Agm::class,
            ['agm_s_ext', 'agm_s_ext', 'agm_s_ext', 'agm_s_ext', 'agm_s_hini', 'agm_s_hini', 'agm_s_hini', 'agm_s_hini', 'agm_s_loc', 'agm_s_loc', 'agm_s_loc', 'agm_s_loc', 'agm_s_med', 'agm_s_med', 'agm_s_med', 'agm_s_med'],
            ['agm_ext', 'agm_hini', 'agm_loc', 'agm_med', 'agm_ext', 'agm_hini', 'agm_loc', 'agm_med', 'agm_ext', 'agm_hini', 'agm_loc', 'agm_med', 'agm_ext', 'agm_hini', 'agm_loc', 'agm_med'],
        );
    }
}
