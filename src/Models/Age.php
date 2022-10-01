<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Age extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['age_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['age_cde_cod'],
            ['cde_cod'],
        );
    }

    public function ban(): BelongsTo
    {
        return $this->belongsTo(
            Ban::class,
            ['age_ban_seq'],
            ['ban_seq'],
        );
    }
}
