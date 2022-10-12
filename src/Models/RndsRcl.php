<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RndsRcl extends OracleEloquent
{
    use Compoships;

    protected $table = 'rnds_rcl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rnds_r_tpcod', 'rnds_r_dthr', 'rnds_r_cod', 'rnds_r_pac', 'rnds_r_dsc', 'rnds_r_atr'];

    protected $connection = 'smart';

    protected $guarded = [];
}
