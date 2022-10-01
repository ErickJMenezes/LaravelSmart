<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Psi extends OracleEloquent
{
    use Compoships;

    protected $table = 'psi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psi_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
