<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cmt extends OracleEloquent
{
    use Compoships;

    protected $table = 'cmt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cmt_cod', 'cmt_tcm_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function tcm(): BelongsTo
    {
        return $this->belongsTo(
            Tcm::class,
            ['cmt_tcm_cod'],
            ['tcm_cod'],
        );
    }
}
