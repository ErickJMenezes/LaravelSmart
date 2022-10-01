<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DedHp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ded_hp_rep_hp_serie', 'ded_hp_rep_hp_num', 'ded_hp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function repHp(): BelongsTo
    {
        return $this->belongsTo(
            RepHp::class,
            ['ded_hp_rep_hp_num', 'ded_hp_rep_hp_num', 'ded_hp_rep_hp_serie', 'ded_hp_rep_hp_serie'],
            ['rep_hp_num', 'rep_hp_serie', 'rep_hp_num', 'rep_hp_serie'],
        );
    }
}
