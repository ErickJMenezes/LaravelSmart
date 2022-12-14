<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Loinc extends OracleEloquent
{
    use Compoships;

    protected $table = 'loinc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['loinc_num'];

    protected $connection = 'smart';

    protected $guarded = [];
}
