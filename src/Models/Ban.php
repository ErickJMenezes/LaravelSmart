<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ban extends OracleEloquent
{
    use Compoships;

    protected $table = 'ban';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ban_seq'];

    protected $connection = 'smart';

    protected $guarded = [];
}
