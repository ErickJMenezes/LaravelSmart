<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Etd extends OracleEloquent
{
    use Compoships;

    protected $table = 'etd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['etd_cid_cod', 'etd_cid_tip', 'etd_tipo', 'etd_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['etd_cid_cod', 'etd_cid_cod', 'etd_cid_tip', 'etd_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }
}
