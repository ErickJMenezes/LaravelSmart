<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cid extends OracleEloquent
{
    use Compoships;

    protected $table = 'cid';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cid_cod', 'cid_tip'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['cid_qst_cod'],
            ['qst_cod'],
        );
    }
}
