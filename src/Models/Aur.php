<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Aur extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['aur_pac_reg', 'aur_num', 'aur_hsp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['aur_psv_cod', 'aur_psv_cod_ccih'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['aur_bul_med'],
            ['bul_med'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['aur_unid'],
            ['bun_cod'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['aur_uso'],
            ['bus_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['aur_hsp_num', 'aur_hsp_num', 'aur_pac_reg', 'aur_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['aur_prof_mot_cod', 'aur_prof_mot_cod', 'aur_prof_mot_tipo', 'aur_prof_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }
}
