<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EcpCirurg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ecp_c_smk_tipo', 'ecp_c_ecp_id', 'ecp_c_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ecp(): BelongsTo
    {
        return $this->belongsTo(
            Ecp::class,
            ['ecp_c_ecp_id'],
            ['ecp_id'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ecp_c_smk_cod', 'ecp_c_smk_cod', 'ecp_c_smk_tipo', 'ecp_c_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
