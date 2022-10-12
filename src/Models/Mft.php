<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mft extends OracleEloquent
{
    use Compoships;

    protected $table = 'mft';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mft_dt', 'mft_fat_serie', 'mft_fat'];

    protected $connection = 'smart';

    protected $guarded = [];
}
