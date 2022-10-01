<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CrCor extends OracleEloquent
{
    use Compoships;

    protected $table = 'cr_cor';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cr_cor_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
