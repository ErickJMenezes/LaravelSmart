<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SotRend extends OracleEloquent
{
    use Compoships;

    protected $table = 'sot_rend';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sot_r_sot_id', 'sot_r_exc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['sot_r_exc_id'],
            ['exc_id'],
        );
    }

    public function sot(): BelongsTo
    {
        return $this->belongsTo(
            Sot::class,
            ['sot_r_sot_id'],
            ['sot_id'],
        );
    }
}
