<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CrmsmsControleenvio extends OracleEloquent
{
    use Compoships;

    protected $table = 'crmsms_controleenvio';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cont_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
