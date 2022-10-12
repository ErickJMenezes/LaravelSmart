<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LayoutTip extends OracleEloquent
{
    use Compoships;

    protected $table = 'layout_tip';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['layout_tip_cod'];

    protected $connection = 'smart';

    protected $guarded = [];
}
