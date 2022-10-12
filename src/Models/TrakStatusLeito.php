<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TrakStatusLeito extends OracleEloquent
{
    use Compoships;

    protected $table = 'trak_status_leito';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trak_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
