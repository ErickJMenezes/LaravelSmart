<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VcnLocal extends OracleEloquent
{
    use Compoships;

    protected $table = 'vcn_local';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vcn_l_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
