<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Msa extends OracleEloquent
{
    use Compoships;

    protected $table = 'msa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['msa_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
