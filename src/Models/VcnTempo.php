<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VcnTempo extends OracleEloquent
{
    use Compoships;

    protected $table = 'vcn_tempo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vcn_t_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
