<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MdlFile extends OracleEloquent
{
    use Compoships;

    protected $table = 'mdl_file';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mdl_f_id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
