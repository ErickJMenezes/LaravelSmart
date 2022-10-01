<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmkLoc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['smk_l_smk_tipo', 'smk_l_loc_cod', 'smk_l_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['smk_l_loc_cod'],
            ['loc_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['smk_l_smk_cod', 'smk_l_smk_cod', 'smk_l_smk_tipo', 'smk_l_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
