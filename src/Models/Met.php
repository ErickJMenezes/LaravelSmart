<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Met extends OracleEloquent
{
    use Compoships;

    protected $table = 'met';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['met_dsc_cod', 'met_cod', 'met_atr_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['met_atr_num', 'met_atr_num', 'met_dsc_cod', 'met_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }
}
