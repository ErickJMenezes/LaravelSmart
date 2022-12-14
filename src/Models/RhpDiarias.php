<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RhpDiarias extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhp_diarias';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhp_d_smk_cod', 'rhp_d_str_cod', 'rhp_d_dt_ref', 'rhp_d_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];
}
