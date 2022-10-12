<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LabStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'lab_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lab_str_str_cod', 'lab_map_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
