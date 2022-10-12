<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmartbiCenso extends OracleEloquent
{
    use Compoships;

    protected $table = 'smartbi_censo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['setor', 'ano_mes'];

    protected $connection = 'smart';

    protected $guarded = [];
}
