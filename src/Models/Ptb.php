<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ptb extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ptb_pat_cod', 'ptb_tba_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['ptb_pat_cod'],
            ['pat_cod'],
        );
    }

    public function tba(): BelongsTo
    {
        return $this->belongsTo(
            Tba::class,
            ['ptb_tba_cod'],
            ['tba_cod'],
        );
    }
}
