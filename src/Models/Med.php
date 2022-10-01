<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Med extends OracleEloquent
{
    use Compoships;

    protected $table = 'med';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['med_codi'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
