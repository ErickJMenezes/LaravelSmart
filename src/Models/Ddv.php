<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ddv extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ddv_dvd_bul_med', 'ddv_dvd_cod', 'ddv_bul_med_dil'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dvd(): BelongsTo
    {
        return $this->belongsTo(
            Dvd::class,
            ['ddv_dvd_cod', 'ddv_dvd_cod', 'ddv_dvd_bul_med', 'ddv_dvd_bul_med'],
            ['dvd_cod', 'dvd_bul_med', 'dvd_cod', 'dvd_bul_med'],
        );
    }

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['ddv_bul_med_dil'],
            ['bul_med'],
        );
    }
}
