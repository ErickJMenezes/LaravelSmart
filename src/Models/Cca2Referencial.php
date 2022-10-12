<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cca2Referencial extends OracleEloquent
{
    use Compoships;

    protected $table = 'cca2_referencial';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cca2_cod', 'cca2_pca_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
