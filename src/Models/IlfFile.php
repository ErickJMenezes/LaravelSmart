<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IlfFile extends OracleEloquent
{
    use Compoships;

    protected $table = 'ilf_file';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ilf_f_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
