<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvParmDom extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv_parm_dom';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_p_dom_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
