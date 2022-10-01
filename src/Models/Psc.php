<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Psc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['psc_pac', 'psc_hsp', 'psc_num', 'psc_asc'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['psc_adm_usr_login'],
            ['usr_login'],
        );
    }

    public function apm(): BelongsTo
    {
        return $this->belongsTo(
            Apm::class,
            ['psc_apm', 'psc_apm', 'psc_apm', 'psc_hsp', 'psc_hsp', 'psc_hsp', 'psc_pac', 'psc_pac', 'psc_pac'],
            ['apm_num', 'apm_hsp', 'apm_pac', 'apm_num', 'apm_hsp', 'apm_pac', 'apm_num', 'apm_hsp', 'apm_pac'],
        );
    }

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['psc_cod'],
            ['bul_med'],
        );
    }

    public function bun(): BelongsTo
    {
        return $this->belongsTo(
            Bun::class,
            ['psc_diluente_unid', 'psc_unid', 'psc_unidqt'],
            ['bun_cod', 'bun_cod', 'bun_cod'],
        );
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(
            Bus::class,
            ['psc_uso'],
            ['bus_cod'],
        );
    }

    public function bvi(): BelongsTo
    {
        return $this->belongsTo(
            Bvi::class,
            ['psc_via'],
            ['bvi_cod'],
        );
    }

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['psc_q_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psc_med_ass_1', 'psc_med_ass_2', 'psc_med', 'psc_med2', 'psc_q_psv_assist'],
            ['psv_cod', 'psv_cod', 'psv_cod', 'psv_cod', 'psv_cod'],
        );
    }

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['psc_q_cid_cod', 'psc_q_cid_cod', 'psc_q_cid_tip', 'psc_q_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function qmod(): BelongsTo
    {
        return $this->belongsTo(
            Qmod::class,
            ['psc_q_qmod_cod'],
            ['qmod_cod'],
        );
    }

    public function qobj(): BelongsTo
    {
        return $this->belongsTo(
            Qobj::class,
            ['psc_q_qobj_cod'],
            ['qobj_cod'],
        );
    }

    public function sco(): BelongsTo
    {
        return $this->belongsTo(
            Sco::class,
            ['psc_q_sco_id'],
            ['sco_id'],
        );
    }
}
