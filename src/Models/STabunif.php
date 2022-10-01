<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class STabunif extends OracleEloquent
{
    use Compoships;

    protected $table = 's_tabunif';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['id'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
