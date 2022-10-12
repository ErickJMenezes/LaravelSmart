<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EntCat extends OracleEloquent
{
    use Compoships;

    protected $table = 'ent_cat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ent_cat_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
