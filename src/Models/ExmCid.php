<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmCid extends OracleEloquent
{
    use Compoships;

    protected $table = 'exm_cid';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exm_c_cid_tip', 'exm_c_cid_cod', 'exm_c_exm_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['exm_c_cid_cod', 'exm_c_cid_cod', 'exm_c_cid_tip', 'exm_c_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exm_c_exm_cod'],
            ['exm_cod'],
        );
    }
}
