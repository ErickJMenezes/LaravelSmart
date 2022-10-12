<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class AdpCid extends OracleEloquent
{
    use Compoships;

    protected $table = 'adp_cid';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['adp_c_cid_cod', 'adp_c_cid_tip', 'adp_c_adp_tipo', 'adp_c_adp_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['adp_c_adp_cod', 'adp_c_adp_cod', 'adp_c_adp_tipo', 'adp_c_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['adp_c_cid_cod', 'adp_c_cid_cod', 'adp_c_cid_tip', 'adp_c_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }
}
