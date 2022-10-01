<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rdi extends OracleEloquent
{
    use Compoships;

    protected $table = 'rdi';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rdi_mte_seq', 'rdi_seq', 'rdi_mte_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function maqCielo(): BelongsTo
    {
        return $this->belongsTo(
            MaqCielo::class,
            ['rdi_cielo_maquina'],
            ['maq_c_id'],
        );
    }

    public function ppoTrs(): BelongsTo
    {
        return $this->belongsTo(
            PpoTrs::class,
            ['rdi_ppo_trs_ppo_cod', 'rdi_ppo_trs_ppo_cod', 'rdi_ppo_trs_cod', 'rdi_ppo_trs_cod'],
            ['ppo_trs_ppo_cod', 'ppo_trs_cod', 'ppo_trs_ppo_cod', 'ppo_trs_cod'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['rdi_ccr_caixa'],
            ['ccr_cod'],
        );
    }

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['rdi_resgate_cpg_num', 'rdi_resgate_cpg_num', 'rdi_resgate_cpg_serie', 'rdi_resgate_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function cre(): BelongsTo
    {
        return $this->belongsTo(
            Cre::class,
            ['rdi_cre_cod'],
            ['cre_cod'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['rdi_mns_num', 'rdi_mns_num', 'rdi_mns_serie', 'rdi_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function rdiTef(): BelongsTo
    {
        return $this->belongsTo(
            RdiTef::class,
            ['rdi_tef_id'],
            ['rdi_t_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rdi_usr_login'],
            ['usr_login'],
        );
    }

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['rdi_mte_seq', 'rdi_mte_seq', 'rdi_mte_serie', 'rdi_mte_serie'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }
}
