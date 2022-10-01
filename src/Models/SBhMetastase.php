<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SBhMetastase extends OracleEloquent
{
    use Compoships;

    protected $table = 's_bh_metastase';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['s_bh_m_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
