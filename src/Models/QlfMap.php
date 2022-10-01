<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class QlfMap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['qlf_map_elb_cod', 'qlf_map_qlf_dsc', 'qlf_map_corresp', 'qlf_map_qlf_atr', 'qlf_map_qlf_rot'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qlf(): BelongsTo
    {
        return $this->belongsTo(
            Qlf::class,
            ['qlf_map_qlf_rot', 'qlf_map_qlf_rot', 'qlf_map_qlf_rot', 'qlf_map_qlf_atr', 'qlf_map_qlf_atr', 'qlf_map_qlf_atr', 'qlf_map_qlf_dsc', 'qlf_map_qlf_dsc', 'qlf_map_qlf_dsc'],
            ['qlf_rot', 'qlf_atr', 'qlf_dsc', 'qlf_rot', 'qlf_atr', 'qlf_dsc', 'qlf_rot', 'qlf_atr', 'qlf_dsc'],
        );
    }
}
