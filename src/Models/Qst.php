<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qst extends OracleEloquent
{
    use Compoships;

    protected $table = 'qst';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qst_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['qst_cid_tip', 'qst_cid_tip', 'qst_cid_cod', 'qst_cid_cod'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }
}
