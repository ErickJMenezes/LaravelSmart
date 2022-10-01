<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwMaster extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_master';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_chave'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
