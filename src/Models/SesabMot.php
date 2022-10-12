<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SesabMot extends OracleEloquent
{
    use Compoships;

    protected $table = 'sesab_mot';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sesab_mot_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
