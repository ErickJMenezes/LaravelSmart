<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Map extends OracleEloquent
{
    use Compoships;

    protected $table = 'map';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['map_tbd_seq', 'map_cct_cod', 'map_gcc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function tbd(): BelongsTo
    {
        return $this->belongsTo(
            Tbd::class,
            ['map_tbd_seq'],
            ['tbd_seq'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['map_cct_cod'],
            ['cct_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['map_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
