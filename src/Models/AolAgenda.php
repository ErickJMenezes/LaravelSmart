<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AolAgenda extends OracleEloquent
{
    use Compoships;

    protected $table = 'aol_agenda';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aol_a_id'];

    protected $connection = 'smart';

    protected $guarded = [];
}
