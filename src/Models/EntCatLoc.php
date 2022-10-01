<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntCatLoc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ent_cat_loc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
