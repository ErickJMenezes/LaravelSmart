<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LayEtqParmDom extends OracleEloquent
{
    use Compoships;

    protected $table = 'lay_etq_parm_dom';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lay_etq_p_dom_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
