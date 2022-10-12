<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsEspGrupo extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_esp_grupo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_esp_grupo_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
