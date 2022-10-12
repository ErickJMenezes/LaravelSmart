<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RhpCustoM extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhp_custo_m';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhp_m_ctf_cod', 'rhp_m_dt_ref', 'rhp_m_ctf_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['rhp_m_ctf_cod', 'rhp_m_ctf_cod', 'rhp_m_ctf_tipo', 'rhp_m_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }
}
