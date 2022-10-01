<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LihSProb extends OracleEloquent
{
    use Compoships;

    protected $table = 'lih_s_prob';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lih_s_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
