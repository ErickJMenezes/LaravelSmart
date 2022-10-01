<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VcnConfig extends OracleEloquent
{
    use Compoships;

    protected $table = 'vcn_config';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vcn_c_vcn_l_id', 'vcn_c_vcn_v_id', 'vcn_c_vcn_via_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
