<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cri extends OracleEloquent
{
    use Compoships;

    protected $table = 'cri';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cri_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
