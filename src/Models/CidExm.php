<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CidExm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cid_e_cid_cod', 'cid_e_exm_cod', 'cid_e_cid_tip'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['cid_e_cid_cod', 'cid_e_cid_cod', 'cid_e_cid_tip', 'cid_e_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['cid_e_exm_cod'],
            ['exm_cod'],
        );
    }
}
