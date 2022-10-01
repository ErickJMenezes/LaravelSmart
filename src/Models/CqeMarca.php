<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CqeMarca extends OracleEloquent
{
    use Compoships;

    protected $table = 'cqe_marca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cqe_m_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
