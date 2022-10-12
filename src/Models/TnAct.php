<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TnAct extends OracleEloquent
{
    use Compoships;

    protected $table = 'tn_act';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tn_act_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
