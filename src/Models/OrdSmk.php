<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class OrdSmk extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ord_smk_cod', 'ord_smk_pos', 'ord_smk_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ord_smk_cod', 'ord_smk_cod', 'ord_smk_tipo', 'ord_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
