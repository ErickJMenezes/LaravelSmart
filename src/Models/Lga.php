<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lga extends OracleEloquent
{
    use Compoships;

    protected $table = 'lga';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lga_atr_num', 'lga_cor', 'lga_tipo', 'lga_atr_dsc'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['lga_atr_num', 'lga_atr_num', 'lga_atr_dsc', 'lga_atr_dsc'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }
}
