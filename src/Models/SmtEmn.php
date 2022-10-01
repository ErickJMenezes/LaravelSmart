<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmtEmn extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['smt_e_emn_cod', 'smt_e_smt_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emn(): BelongsTo
    {
        return $this->belongsTo(
            Emn::class,
            ['smt_e_emn_cod'],
            ['emn_cod'],
        );
    }

    public function smt(): BelongsTo
    {
        return $this->belongsTo(
            Smt::class,
            ['smt_e_smt_cod'],
            ['smt_cod'],
        );
    }
}
