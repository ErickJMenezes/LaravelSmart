<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CreParc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cre_p_parc_max', 'cre_p_cre_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cre(): BelongsTo
    {
        return $this->belongsTo(
            Cre::class,
            ['cre_p_cre_cod'],
            ['cre_cod'],
        );
    }
}
