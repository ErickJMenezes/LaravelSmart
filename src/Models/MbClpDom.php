<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MbClpDom extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mb_clp_dom_mb_clp_nome', 'mb_clp_dom_value_display', 'mb_clp_dom_mb_cls_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mbClp(): BelongsTo
    {
        return $this->belongsTo(
            MbClp::class,
            ['mb_clp_dom_mb_clp_nome', 'mb_clp_dom_mb_clp_nome', 'mb_clp_dom_mb_cls_tipo', 'mb_clp_dom_mb_cls_tipo'],
            ['mb_clp_nome', 'mb_clp_mb_cls_tipo', 'mb_clp_nome', 'mb_clp_mb_cls_tipo'],
        );
    }

    public function mbCls(): BelongsTo
    {
        return $this->belongsTo(
            MbCls::class,
            ['mb_clp_dom_mb_cls_tipo'],
            ['mb_cls_tipo'],
        );
    }
}
