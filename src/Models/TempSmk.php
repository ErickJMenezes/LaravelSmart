<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TempSmk extends OracleEloquent
{
    use Compoships;

    protected $table = 'temp_smk';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['temp_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
