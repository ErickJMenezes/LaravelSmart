<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cca extends OracleEloquent
{
    use Compoships;

    protected $table = 'cca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cca_pca_cod', 'cca_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
