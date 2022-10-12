<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntObj extends OracleEloquent
{
    use Compoships;

    protected $table = 'ent_obj';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ent_obj_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
