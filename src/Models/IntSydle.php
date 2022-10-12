<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IntSydle extends OracleEloquent
{
    use Compoships;

    protected $table = 'int_sydle';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['int_sydle_num'];

    protected $connection = 'smart';

    protected $guarded = [];
}
