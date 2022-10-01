<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eaa extends OracleEloquent
{
    use Compoships;

    protected $table = 'eaa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eaa_cod_amostra', 'eaa_elb_cod', 'eaa_num_aparelho', 'eaa_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
