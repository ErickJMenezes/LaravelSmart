<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmartbiCensoCnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'smartbi_censo_cnv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['setor', 'ano_mes', 'empresa'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
