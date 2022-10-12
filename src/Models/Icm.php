<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Icm extends OracleEloquent
{
    use Compoships;

    protected $table = 'icm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['icm_mrc_cod', 'icm_cop_num', 'icm_icp_seq', 'icm_cop_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function icp(): BelongsTo
    {
        return $this->belongsTo(
            Icp::class,
            ['icm_icp_seq', 'icm_icp_seq', 'icm_icp_seq', 'icm_cop_num', 'icm_cop_num', 'icm_cop_num', 'icm_cop_serie', 'icm_cop_serie', 'icm_cop_serie'],
            ['icp_seq', 'icp_cop_num', 'icp_cop_serie', 'icp_seq', 'icp_cop_num', 'icp_cop_serie', 'icp_seq', 'icp_cop_num', 'icp_cop_serie'],
        );
    }

    public function mrc(): BelongsTo
    {
        return $this->belongsTo(
            Mrc::class,
            ['icm_mrc_cod'],
            ['mrc_cod'],
        );
    }
}
