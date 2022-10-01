<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BulBus extends OracleEloquent
{
    use Compoships;

    protected $table = 'bul_bus';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bul_b_bus_cod', 'bul_b_bul_med'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['bul_b_bul_med'],
            ['bul_med'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['bul_b_bus_cod'],
            ['bus_cod'],
        );
    }
}
