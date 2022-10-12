<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fcp extends OracleEloquent
{
    use Compoships;

    protected $table = 'fcp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fcp_cap_num', 'fcp_num', 'fcp_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function apq(): BelongsTo
    {
        return $this->belongsTo(
            Apq::class,
            ['fcp_apq_cod_ig', 'fcp_apq_cod_ig', 'fcp_qst_cod_ig', 'fcp_qst_cod_ig', 'fcp_apq_cod_sn', 'fcp_apq_cod_sn', 'fcp_qst_cod_sn', 'fcp_qst_cod_sn', 'fcp_apq_cod_sv', 'fcp_apq_cod_sv', 'fcp_qst_cod_sv', 'fcp_qst_cod_sv', 'fcp_apq_cod_tv', 'fcp_apq_cod_tv', 'fcp_qst_cod_tv', 'fcp_qst_cod_tv', 'fcp_apq_cod_el', 'fcp_apq_cod_el', 'fcp_qst_cod_el', 'fcp_qst_cod_el', 'fcp_apq_cod_sp', 'fcp_apq_cod_sp', 'fcp_qst_cod_sp', 'fcp_qst_cod_sp', 'fcp_apq_cod_em', 'fcp_apq_cod_em', 'fcp_qst_cod_em', 'fcp_qst_cod_em', 'fcp_apq_cod_as', 'fcp_apq_cod_as', 'fcp_qst_cod_as', 'fcp_qst_cod_as'],
            ['apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod'],
        );
    }

    public function cap(): BelongsTo
    {
        return $this->belongsTo(
            Cap::class,
            ['fcp_cap_num', 'fcp_cap_num', 'fcp_pac_reg', 'fcp_pac_reg'],
            ['cap_num', 'cap_pac_reg', 'cap_num', 'cap_pac_reg'],
        );
    }

    public function orp(): BelongsTo
    {
        return $this->belongsTo(
            Orp::class,
            ['fcp_orp_num'],
            ['orp_num'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['fcp_terap_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fcp_usr_login'],
            ['usr_login'],
        );
    }
}
