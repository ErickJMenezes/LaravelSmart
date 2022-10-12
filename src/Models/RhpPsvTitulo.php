<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RhpPsvTitulo extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhp_psv_titulo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhp_p_cod', 'rhp_p_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
