<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pca extends OracleEloquent
{
    use Compoships;

    protected $table = 'pca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pca_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
