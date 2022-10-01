<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MbIns extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['mb_ins_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mbCls(): BelongsTo
    {
        return $this->belongsTo(
            MbCls::class,
            ['mb_ins_mb_cls_tipo'],
            ['mb_cls_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mb_ins_usr_login'],
            ['usr_login'],
        );
    }
}
