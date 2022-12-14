<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SPa extends OracleEloquent
{
    use Compoships;

    protected $table = 's_pa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pa_dv', 'pa_cmp', 'pa_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
