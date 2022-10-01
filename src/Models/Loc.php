<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Loc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['loc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cle(): BelongsTo
    {
        return $this->belongsTo(
            Cle::class,
            ['loc_cle_cod'],
            ['cle_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['loc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['loc_ctf_cod', 'loc_ctf_cod', 'loc_ctf_tipo', 'loc_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function esp(): BelongsTo
    {
        return $this->belongsTo(
            Esp::class,
            ['loc_esp_cod'],
            ['esp_cod'],
        );
    }

    public function locs(): HasMany
    {
        return $this->hasMany(
            Loc::class,
            ['loc_cod'],
            ['loc_loc_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['loc_pac'],
            ['pac_reg'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['loc_smk_cod', 'loc_smk_cod', 'loc_smk_tipo', 'loc_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function smt(): BelongsTo
    {
        return $this->belongsTo(
            Smt::class,
            ['loc_smt_cod'],
            ['smt_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['loc_str'],
            ['str_cod'],
        );
    }
}
