<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CidSin extends OracleEloquent
{
    use Compoships;

    protected $table = 'cid_sin';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cid_s_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['cid_s_cid_cod', 'cid_s_cid_cod', 'cid_s_cid_tip', 'cid_s_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }
}
