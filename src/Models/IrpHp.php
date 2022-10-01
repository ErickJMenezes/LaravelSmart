<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IrpHp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['irp_hp_rep_hp_serie', 'irp_hp_psv_cod', 'irp_hp_rep_hp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['irp_hp_psv_cod'],
            ['psv_cod'],
        );
    }

    public function repHp(): BelongsTo
    {
        return $this->belongsTo(
            RepHp::class,
            ['irp_hp_rep_hp_num', 'irp_hp_rep_hp_num', 'irp_hp_rep_hp_serie', 'irp_hp_rep_hp_serie'],
            ['rep_hp_num', 'rep_hp_serie', 'rep_hp_num', 'rep_hp_serie'],
        );
    }
}
