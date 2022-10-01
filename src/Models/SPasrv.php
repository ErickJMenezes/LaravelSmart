<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SPasrv extends OracleEloquent
{
    use Compoships;

    protected $table = 's_pasrv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pasrv_pa', 'pasrv_csf', 'pasrv_srv'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
