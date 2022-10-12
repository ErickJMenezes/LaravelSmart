<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MsgAutCnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'msg_aut_cnv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['msg_aut_cnv_cod', 'msg_aut_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['msg_aut_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
