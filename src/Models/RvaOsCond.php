<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RvaOsCond extends OracleEloquent
{
    use Compoships;

    protected $table = 'rva_os_cond';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rva_o_osm_serie', 'rva_o_osm_num', 'rva_o_cond_amostra'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rvaCondAmostra(): BelongsTo
    {
        return $this->belongsTo(
            RvaCondAmostra::class,
            ['rva_o_cond_amostra'],
            ['rva_c_cod'],
        );
    }

    public function rva(): BelongsTo
    {
        return $this->belongsTo(
            Rva::class,
            ['rva_o_osm_num', 'rva_o_osm_num', 'rva_o_osm_serie', 'rva_o_osm_serie'],
            ['rva_osm_num', 'rva_osm_serie', 'rva_osm_num', 'rva_osm_serie'],
        );
    }
}
