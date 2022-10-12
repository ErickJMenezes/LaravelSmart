<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EsocPca extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc_pca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_pca_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
