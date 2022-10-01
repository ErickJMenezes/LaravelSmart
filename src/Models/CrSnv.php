<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CrSnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'cr_snv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cr_snv_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
