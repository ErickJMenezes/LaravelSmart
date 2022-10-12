<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TapCid extends OracleEloquent
{
    use Compoships;

    protected $table = 'tap_cid';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tap_c_cid_cod', 'tap_c_cid_tip', 'tap_c_tap_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
