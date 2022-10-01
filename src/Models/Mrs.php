<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mrs extends OracleEloquent
{
    use Compoships;

    protected $table = 'mrs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mrs_str_cod', 'mrs_mat_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
