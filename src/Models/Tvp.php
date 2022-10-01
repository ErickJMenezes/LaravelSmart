<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tvp extends OracleEloquent
{
    use Compoships;

    protected $table = 'tvp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tvp_id', 'tvp_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['tvp_psv_cod'],
            ['psv_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['tvp_pac_reg'],
            ['pac_reg'],
        );
    }

    public function vac(): BelongsTo
    {
        return $this->belongsTo(
            Vac::class,
            ['tvp_vac_cod'],
            ['vac_cod'],
        );
    }
}
