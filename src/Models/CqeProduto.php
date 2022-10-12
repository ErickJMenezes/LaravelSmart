<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CqeProduto extends OracleEloquent
{
    use Compoships;

    protected $table = 'cqe_produto';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cqe_p_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
