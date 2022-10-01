<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'rnc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rnc_serie', 'rnc_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnc(): BelongsTo
    {
        return $this->belongsTo(
            Cnc::class,
            ['rnc_cnc_cod'],
            ['cnc_cod'],
        );
    }

    public function apq(): BelongsTo
    {
        return $this->belongsTo(
            Apq::class,
            ['rnc_efic_apq_cod', 'rnc_efic_apq_cod', 'rnc_efic_qst_cod', 'rnc_efic_qst_cod', 'rnc_pa_apq_cod', 'rnc_pa_apq_cod', 'rnc_pa_qst_cod', 'rnc_pa_qst_cod'],
            ['apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod'],
        );
    }

    public function dnc(): BelongsTo
    {
        return $this->belongsTo(
            Dnc::class,
            ['rnc_dnc_cod'],
            ['dnc_cod'],
        );
    }

    public function gnc(): BelongsTo
    {
        return $this->belongsTo(
            Gnc::class,
            ['rnc_gnc_cod'],
            ['gnc_cod'],
        );
    }

    public function nnc(): BelongsTo
    {
        return $this->belongsTo(
            Nnc::class,
            ['rnc_nnc_cod'],
            ['nnc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rnc_pa_usr_login', 'rnc_reg_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['rnc_pac_reg'],
            ['pac_reg'],
        );
    }

    public function rncs(): HasMany
    {
        return $this->hasMany(
            Rnc::class,
            ['rnc_num', 'rnc_serie', 'rnc_num', 'rnc_serie'],
            ['rnc_rnc_num', 'rnc_rnc_num', 'rnc_rnc_serie', 'rnc_rnc_serie'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rnc_str_origem', 'rnc_str_destino'],
            ['str_cod', 'str_cod'],
        );
    }

    public function tnc(): BelongsTo
    {
        return $this->belongsTo(
            Tnc::class,
            ['rnc_tnc_cod'],
            ['tnc_cod'],
        );
    }

    public function tncSub(): BelongsTo
    {
        return $this->belongsTo(
            TncSub::class,
            ['rnc_tnc_s_cod', 'rnc_tnc_s_cod', 'rnc_tnc_cod', 'rnc_tnc_cod'],
            ['tnc_s_cod', 'tnc_s_tnc_cod', 'tnc_s_cod', 'tnc_s_tnc_cod'],
        );
    }
}
