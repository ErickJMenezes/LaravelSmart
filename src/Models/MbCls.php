<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MbCls extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mb_cls_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mbGrp(): BelongsTo
    {
        return $this->belongsTo(
            MbGrp::class,
            ['mb_cls_mb_grp_id'],
            ['mb_grp_id'],
        );
    }
}
