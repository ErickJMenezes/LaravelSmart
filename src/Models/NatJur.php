<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class NatJur extends OracleEloquent
{
    use Compoships;

    protected $table = 'nat_jur';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nat_j_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
