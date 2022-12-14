<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AtvESocial extends OracleEloquent
{
    use Compoships;

    protected $table = 'atv_e_social';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['atv_e_social_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
