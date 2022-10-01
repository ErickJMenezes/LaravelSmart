<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HspProced extends OracleEloquent
{
    use Compoships;

    protected $table = 'hsp_proced';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hsp_p_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
