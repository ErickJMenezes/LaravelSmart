<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wtxt extends OracleEloquent
{
    use Compoships;

    protected $table = 'wtxt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['wtxt_parag', 'wtxt_nome'];

    protected $connection = 'smart';

    protected $guarded = [];
}
