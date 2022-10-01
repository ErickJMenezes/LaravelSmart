<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TrakStatusItem extends OracleEloquent
{
    use Compoships;

    protected $table = 'trak_status_item';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trak_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
