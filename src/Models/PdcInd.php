<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PdcInd extends OracleEloquent
{
    use Compoships;

    protected $table = 'pdc_ind';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pdc_ind_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
