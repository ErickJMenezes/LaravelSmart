<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VcnEsquema extends OracleEloquent
{
    use Compoships;

    protected $table = 'vcn_esquema';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['vcn_e_vcn_d_id', 'vcn_e_vcn_t_id', 'vcn_e_vcn_v_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function vcnDose(): BelongsTo
    {
        return $this->belongsTo(
            VcnDose::class,
            ['vcn_e_vcn_d_id'],
            ['vcn_d_id'],
        );
    }

    public function vcnTempo(): BelongsTo
    {
        return $this->belongsTo(
            VcnTempo::class,
            ['vcn_e_vcn_t_id'],
            ['vcn_t_id'],
        );
    }

    public function vcnVacina(): BelongsTo
    {
        return $this->belongsTo(
            VcnVacina::class,
            ['vcn_e_vcn_v_id'],
            ['vcn_v_id'],
        );
    }
}
