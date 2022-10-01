<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cfg extends OracleEloquent
{
    use Compoships;

    protected $table = 'cfg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cfg_emp'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
