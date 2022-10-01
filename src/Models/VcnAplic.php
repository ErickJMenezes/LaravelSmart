<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class VcnAplic extends OracleEloquent
{
    use Compoships;

    protected $table = 'vcn_aplic';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = [];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['vcn_a_pac_reg'],
            ['pac_reg'],
        );
    }

    public function vcnDose(): BelongsTo
    {
        return $this->belongsTo(
            VcnDose::class,
            ['vcn_a_vcn_d_id'],
            ['vcn_d_id'],
        );
    }

    public function vcnVacina(): BelongsTo
    {
        return $this->belongsTo(
            VcnVacina::class,
            ['vcn_a_vcn_v_id'],
            ['vcn_v_id'],
        );
    }
}
