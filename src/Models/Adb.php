<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Adb extends OracleEloquent
{
    use Compoships;

    protected $table = 'adb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['adb_aha_cod', 'adb_tap_cod', 'adb_aha_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function aha(): BelongsTo
    {
        return $this->belongsTo(
            Aha::class,
            ['adb_aha_cod', 'adb_aha_cod', 'adb_aha_tipo', 'adb_aha_tipo'],
            ['aha_cod', 'aha_tipo', 'aha_cod', 'aha_tipo'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['adb_tap_cod'],
            ['tap_cod'],
        );
    }
}
