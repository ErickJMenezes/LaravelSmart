<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsiVar extends OracleEloquent
{
    use Compoships;

    protected $table = 'psi_var';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psi_v_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psi(): BelongsTo
    {
        return $this->belongsTo(
            Psi::class,
            ['psi_v_psi_cod'],
            ['psi_cod'],
        );
    }

    public function vsi(): BelongsTo
    {
        return $this->belongsTo(
            Vsi::class,
            ['psi_v_vsi_id'],
            ['vsi_id'],
        );
    }
}
