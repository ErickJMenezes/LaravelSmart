<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Awl extends OracleEloquent
{
    use Compoships;

    protected $table = 'awl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['awl_dthr', 'awl_login'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
