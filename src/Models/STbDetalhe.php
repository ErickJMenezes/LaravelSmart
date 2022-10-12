<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class STbDetalhe extends OracleEloquent
{
    use Compoships;

    protected $table = 's_tb_detalhe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['co_detalhe'];

    protected $connection = 'smart';

    protected $guarded = [];
}
