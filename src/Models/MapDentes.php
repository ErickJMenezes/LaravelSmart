<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MapDentes extends OracleEloquent
{
    use Compoships;

    protected $table = 'map_dentes';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['map_d_atr_num', 'map_d_dsc_cod', 'map_d_nome'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['map_d_atr_num', 'map_d_atr_num', 'map_d_dsc_cod', 'map_d_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }
}
