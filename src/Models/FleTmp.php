<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FleTmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'fle_tmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fle_dthr_chegada', 'fle_psv_cod', 'fle_pac_reg', 'fle_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
