<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class AgmSus extends OracleEloquent
{
    use Compoships;

    protected $table = 'agm_sus';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['agm_s_med', 'agm_s_loc', 'agm_s_ext', 'agm_s_hini'];

    protected $connection = 'smart';

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
