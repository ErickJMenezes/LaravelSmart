<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DispensaMaterial extends OracleEloquent
{
    use Compoships;

    protected $table = 'dispensa_material';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['contador_serie', 'contador'];

    protected $connection = 'smart';

    protected $guarded = [];
}
