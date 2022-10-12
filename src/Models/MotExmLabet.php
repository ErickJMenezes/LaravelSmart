<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MotExmLabet extends OracleEloquent
{
    use Compoships;

    protected $table = 'mot_exm_labet';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['m_exm_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
