<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Vbd extends OracleEloquent
{
    use Compoships;

    protected $table = 'vbd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vbd_emp'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
