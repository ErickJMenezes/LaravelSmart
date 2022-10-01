<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ape extends OracleEloquent
{
    use Compoships;

    protected $table = 'ape';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ape_seq', 'ape_aha_tipo', 'ape_aha_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aha(): BelongsTo
    {
        return $this->belongsTo(
            Aha::class,
            ['ape_aha_cod', 'ape_aha_cod', 'ape_aha_tipo', 'ape_aha_tipo'],
            ['aha_cod', 'aha_tipo', 'aha_cod', 'aha_tipo'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['ape_bus_cod'],
            ['bus_cod'],
        );
    }
}
