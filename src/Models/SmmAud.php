<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmmAud extends OracleEloquent
{
    use Compoships;

    protected $table = 'smm_aud';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smm_a_num', 'smm_a_osm', 'smm_a_osm_serie', 'smm_a_dthr'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
