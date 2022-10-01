<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lcp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lcp_exame'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function col(): BelongsTo
    {
        return $this->belongsTo(
            Col::class,
            ['lcp_col_cod'],
            ['col_cod'],
        );
    }

    public function lcps(): HasMany
    {
        return $this->hasMany(
            Lcp::class,
            ['lcp_exame'],
            ['lcp_lcp_exame'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['lcp_pac_reg'],
            ['pac_reg'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['lcp_psv_cod'],
            ['psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lcp_str_cod'],
            ['str_cod'],
        );
    }
}
