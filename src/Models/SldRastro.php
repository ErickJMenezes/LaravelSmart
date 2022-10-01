<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SldRastro extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sld_rastro_osm', 'sld_rastro_osm_serie', 'sld_rastro_reg_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sld(): BelongsTo
    {
        return $this->belongsTo(
            Sld::class,
            ['sld_rastro_num', 'sld_rastro_num', 'sld_rastro_serie', 'sld_rastro_serie'],
            ['sld_num', 'sld_serie', 'sld_num', 'sld_serie'],
        );
    }
}
