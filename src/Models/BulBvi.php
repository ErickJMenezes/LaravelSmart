<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BulBvi extends OracleEloquent
{
    use Compoships;

    protected $table = 'bul_bvi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bul_v_bul_med', 'bul_v_bvi_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['bul_v_bul_med'],
            ['bul_med'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['bul_v_bvi_cod'],
            ['bvi_cod'],
        );
    }
}
