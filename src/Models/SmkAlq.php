<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmkAlq extends OracleEloquent
{
    use Compoships;

    protected $table = 'smk_alq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smk_alq_atv_cod', 'smk_alq_id', 'smk_alq_str_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
