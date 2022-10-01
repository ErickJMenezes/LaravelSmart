<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MlokMsg extends OracleEloquent
{
    use Compoships;

    protected $table = 'mlok_msg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['msg_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
