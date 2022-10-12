<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MbInp extends OracleEloquent
{
    use Compoships;

    protected $table = 'mb_inp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mb_inp_mb_ins_id', 'mb_inp_mb_clp_nome'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mbClp(): BelongsTo
    {
        return $this->belongsTo(
            MbClp::class,
            ['mb_inp_mb_clp_nome', 'mb_inp_mb_clp_nome', 'mb_inp_mb_cls_tipo', 'mb_inp_mb_cls_tipo'],
            ['mb_clp_nome', 'mb_clp_mb_cls_tipo', 'mb_clp_nome', 'mb_clp_mb_cls_tipo'],
        );
    }

    public function mbIns(): BelongsTo
    {
        return $this->belongsTo(
            MbIns::class,
            ['mb_inp_mb_ins_id'],
            ['mb_ins_id'],
        );
    }
}
