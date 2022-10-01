<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LgpdCtrAcGrp extends OracleEloquent
{
    use Compoships;

    protected $table = 'lgpd_ctr_ac_grp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lgpd_cag_grp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['lgpd_cag_grp_cod'],
            ['grp_cod'],
        );
    }
}
