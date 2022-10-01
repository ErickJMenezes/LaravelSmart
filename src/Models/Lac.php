<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lac extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lac_hsp', 'lac_pac', 'lac_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['lac_cnv'],
            ['cnv_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['lac_hsp', 'lac_hsp', 'lac_pac', 'lac_pac'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['lac_resp'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['lac_cod', 'lac_cod', 'lac_tpcod', 'lac_tpcod'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['lac_str'],
            ['str_cod'],
        );
    }
}
