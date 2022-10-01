<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EcpMembro extends OracleEloquent
{
    use Compoships;

    protected $table = 'ecp_membro';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ecp_m_psv_cod', 'ecp_m_ecp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ecp(): BelongsTo
    {
        return $this->belongsTo(
            Ecp::class,
            ['ecp_m_ecp_id'],
            ['ecp_id'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['ecp_m_psv_cod'],
            ['psv_cod'],
        );
    }
}
