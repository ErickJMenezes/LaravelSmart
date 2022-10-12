<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qlf extends OracleEloquent
{
    use Compoships;

    protected $table = 'qlf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qlf_atr', 'qlf_dsc', 'qlf_rot'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['qlf_atr', 'qlf_atr', 'qlf_dsc', 'qlf_dsc'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['qlf_ocup_dsc_carta'],
            ['dsc_cod'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['qlf_tap_cod'],
            ['tap_cod'],
        );
    }
}
