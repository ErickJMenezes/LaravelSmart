<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Law extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['law_smk_tipo', 'law_usi_tipo', 'law_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['law_smk_cod', 'law_smk_cod', 'law_smk_tipo', 'law_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
