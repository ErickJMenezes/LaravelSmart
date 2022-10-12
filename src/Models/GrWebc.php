<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrWebc extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_webc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_webc_dthr', 'gr_webc_session_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
