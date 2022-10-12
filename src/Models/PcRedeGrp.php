<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PcRedeGrp extends OracleEloquent
{
    use Compoships;

    protected $table = 'pc_rede_grp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pc_rede_grp_cod', 'pc_rede_grp_host'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pcRede(): BelongsTo
    {
        return $this->belongsTo(
            PcRede::class,
            ['pc_rede_grp_host'],
            ['pc_rede_host'],
        );
    }

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['pc_rede_grp_cod'],
            ['grp_cod'],
        );
    }
}
