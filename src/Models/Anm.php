<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Anm extends OracleEloquent
{
    use Compoships;

    protected $table = 'anm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['anm_atr_vlr_ini', 'anm_atr_dsc', 'anm_atr_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['anm_atr_num', 'anm_atr_num', 'anm_atr_dsc', 'anm_atr_dsc'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }
}
