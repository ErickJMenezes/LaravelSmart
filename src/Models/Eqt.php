<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eqt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['eqt_adp_cod', 'eqt_lqt_cod', 'eqt_adp_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['eqt_adp_cod', 'eqt_adp_cod', 'eqt_adp_tipo', 'eqt_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function lqt(): BelongsTo
    {
        return $this->belongsTo(
            Lqt::class,
            ['eqt_lqt_cod'],
            ['lqt_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['eqt_smk_cod', 'eqt_smk_cod', 'eqt_smk_tipo', 'eqt_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
