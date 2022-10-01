<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'cmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cmp_seq', 'cmp_item', 'cmp_cod', 'cmp_tpcod', 'cmp_tpitem'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['cmp_amo_cod'],
            ['amo_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cmp_cod', 'cmp_cod', 'cmp_tpcod', 'cmp_tpcod', 'cmp_item', 'cmp_item', 'cmp_tpitem', 'cmp_tpitem'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
