<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IctLista extends OracleEloquent
{
    use Compoships;

    protected $table = 'ict_lista';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ict_l_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
