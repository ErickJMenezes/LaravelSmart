<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GrSes extends OracleEloquent
{
    use Compoships;

    protected $table = 'gr_ses';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gr_ses_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
