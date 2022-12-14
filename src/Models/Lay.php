<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lay extends OracleEloquent
{
    use Compoships;

    protected $table = 'lay';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lay_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
