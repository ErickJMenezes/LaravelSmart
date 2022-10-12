<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Apr extends OracleEloquent
{
    use Compoships;

    protected $table = 'apr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['apr_codi'];

    protected $connection = 'smart';

    protected $guarded = [];
}
