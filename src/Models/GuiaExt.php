<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GuiaExt extends OracleEloquent
{
    use Compoships;

    protected $table = 'guia_ext';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['guia_ext_numero', 'guia_ext_osm_serie', 'guia_ext_cod_proced', 'guia_ext_osm_num'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
