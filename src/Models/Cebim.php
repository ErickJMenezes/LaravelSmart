<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cebim extends OracleEloquent
{
    use Compoships;

    protected $table = 'cebim';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cebim_crm'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
