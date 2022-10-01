<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvSmk extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['psv_s_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_s_psv_cod'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['psv_s_smk_cod', 'psv_s_smk_cod', 'psv_s_smk_tipo', 'psv_s_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['psv_s_str_cod'],
            ['str_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['psv_s_ctf_cod', 'psv_s_ctf_cod', 'psv_s_ctf_tipo', 'psv_s_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }
}
