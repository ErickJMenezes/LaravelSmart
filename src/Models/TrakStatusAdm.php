<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TrakStatusAdm extends OracleEloquent
{
    use Compoships;

    protected $table = 'trak_status_adm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['trak_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
