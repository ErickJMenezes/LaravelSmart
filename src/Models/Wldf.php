<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wldf extends OracleEloquent
{
    use Compoships;

    protected $table = 'wldf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['wldf_smk'];

    protected $connection = 'smart';

    protected $guarded = [];
}
