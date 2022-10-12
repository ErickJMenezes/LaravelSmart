<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VcnVacina extends OracleEloquent
{
    use Compoships;

    protected $table = 'vcn_vacina';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vcn_v_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
