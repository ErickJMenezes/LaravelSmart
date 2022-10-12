<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Nts extends OracleEloquent
{
    use Compoships;

    protected $table = 'nts';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['nts_num'];

    protected $connection = 'smart';

    protected $guarded = [];
}
