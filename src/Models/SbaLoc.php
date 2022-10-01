<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SbaLoc extends OracleEloquent
{
    use Compoships;

    protected $table = 'sba_loc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sba_l_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sbaLocs(): HasMany
    {
        return $this->hasMany(
            SbaLoc::class,
            ['sba_l_id'],
            ['sba_l_sba_l_id_pai'],
        );
    }

    public function sbaTpl(): BelongsTo
    {
        return $this->belongsTo(
            SbaTpl::class,
            ['sba_l_sba_t_id'],
            ['sba_t_id'],
        );
    }
}
