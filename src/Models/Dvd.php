<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dvd extends OracleEloquent
{
    use Compoships;

    protected $table = 'dvd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dvd_cod', 'dvd_bul_med'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['dvd_bul_med'],
            ['bul_med'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['dvd_bun_cod'],
            ['bun_cod'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['dvd_bvi_cod'],
            ['bvi_cod'],
        );
    }
}
