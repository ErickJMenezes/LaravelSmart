<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eco extends OracleEloquent
{
    use Compoships;

    protected $table = 'eco';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eco_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
