<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IEmsEventos extends OracleEloquent
{
    use Compoships;

    protected $table = 'i_ems_eventos';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['i_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
