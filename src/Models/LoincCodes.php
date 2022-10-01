<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LoincCodes extends OracleEloquent
{
    use Compoships;

    protected $table = 'loinc_codes';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['codesystemid', 'codeid'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
