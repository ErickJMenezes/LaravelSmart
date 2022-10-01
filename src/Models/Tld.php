<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tld extends OracleEloquent
{
    use Compoships;

    protected $table = 'tld';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tld_v2', 'tld_nome', 'tld_v1'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
