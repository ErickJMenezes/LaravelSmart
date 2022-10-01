<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MbClp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mb_clp_mb_cls_tipo', 'mb_clp_nome'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mbCls(): BelongsTo
    {
        return $this->belongsTo(
            MbCls::class,
            ['mb_clp_mb_cls_tipo'],
            ['mb_cls_tipo'],
        );
    }
}
