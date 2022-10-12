<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AolOperacoes extends OracleEloquent
{
    use Compoships;

    protected $table = 'aol_operacoes';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aol_o_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
