<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tca extends OracleEloquent
{
    use Compoships;

    protected $table = 'tca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tca_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
