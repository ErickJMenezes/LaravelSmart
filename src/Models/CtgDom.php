<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CtgDom extends OracleEloquent
{
    use Compoships;

    protected $table = 'ctg_dom';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ctg_dom_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
