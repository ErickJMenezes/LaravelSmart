<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BioMap extends OracleEloquent
{
    use Compoships;

    protected $table = 'bio_map';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bio_map_qtd', 'bio_map_cod_pag', 'bio_map_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
