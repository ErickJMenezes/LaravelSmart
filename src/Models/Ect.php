<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ect extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ect_pac_reg', 'ect_numero'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function tat(): BelongsTo
    {
        return $this->belongsTo(
            Tat::class,
            ['ect_tat_cod'],
            ['tat_cod'],
        );
    }

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['ect_cde_cod'],
            ['cde_cod'],
        );
    }

    public function pai(): BelongsTo
    {
        return $this->belongsTo(
            Pai::class,
            ['ect_pai_sigla'],
            ['pai_sigla'],
        );
    }

    public function ufe(): BelongsTo
    {
        return $this->belongsTo(
            Ufe::class,
            ['ect_ufe_sigla', 'ect_ufe_sigla', 'ect_pai_sigla', 'ect_pai_sigla'],
            ['ufe_pai_sigla', 'ufe_sigla', 'ufe_pai_sigla', 'ufe_sigla'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['ect_pac_reg'],
            ['pac_reg'],
        );
    }

    public function esocCdp(): BelongsTo
    {
        return $this->belongsTo(
            EsocCdp::class,
            ['ect_esoc_cdp_cod'],
            ['esoc_cdp_cod'],
        );
    }
}
