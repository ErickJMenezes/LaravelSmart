<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pdc extends OracleEloquent
{
    use Compoships;

    protected $table = 'pdc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pdc_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['pdc_resp_fin_cde', 'pdc_naturalidade_cde_cod'],
            ['cde_cod', 'cde_cod'],
        );
    }

    public function cer(): BelongsTo
    {
        return $this->belongsTo(
            Cer::class,
            ['pdc_cer_cod'],
            ['cer_cod'],
        );
    }

    public function coj(): BelongsTo
    {
        return $this->belongsTo(
            Coj::class,
            ['pdc_coj_cod'],
            ['coj_cod'],
        );
    }

    public function pai(): BelongsTo
    {
        return $this->belongsTo(
            Pai::class,
            ['pdc_pai_sigla'],
            ['pai_sigla'],
        );
    }

    public function pdcInd(): BelongsTo
    {
        return $this->belongsTo(
            PdcInd::class,
            ['pdc_indic_tipo'],
            ['pdc_ind_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pdc_pac_reg'],
            ['pac_reg'],
        );
    }
}
