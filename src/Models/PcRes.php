<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PcRes extends OracleEloquent
{
    use Compoships;

    protected $table = 'pc_res';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pc_res_id', 'pc_res_num'];

    protected $connection = 'smart';

    protected $guarded = [];
}
