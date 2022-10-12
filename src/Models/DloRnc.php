<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloRnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlo_rnc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlo_r_rnc_serie', 'dlo_r_rnc_num', 'dlo_r_dlo_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
