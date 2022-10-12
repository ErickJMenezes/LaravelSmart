<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HcTur extends OracleEloquent
{
    use Compoships;

    protected $table = 'hc_tur';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hc_tur_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
