<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RpeRcl extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpe_rcl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cdg(): BelongsTo
    {
        return $this->belongsTo(
            Cdg::class,
            ['rpe_r_cdg_num', 'rpe_r_cdg_num', 'rpe_r_cdg_serie', 'rpe_r_cdg_serie'],
            ['cdg_num', 'cdg_serie', 'cdg_num', 'cdg_serie'],
        );
    }
}
