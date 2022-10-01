<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PdcNac extends OracleEloquent
{
    use Compoships;

    protected $table = 'pdc_nac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pdc_n_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
