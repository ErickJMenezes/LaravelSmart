<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class STbCid extends OracleEloquent
{
    use Compoships;

    protected $table = 's_tb_cid';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cid_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
