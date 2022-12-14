<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class InePti extends OracleEloquent
{
    use Compoships;

    protected $table = 'ine_pti';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ine_p_nfe_num', 'ine_p_nfe_serie', 'ine_p_nfe_tipo', 'ine_p_ine_seq', 'ine_p_fne_cod', 'ine_p_pti_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ine(): BelongsTo
    {
        return $this->belongsTo(
            Ine::class,
            ['ine_p_ine_seq', 'ine_p_ine_seq', 'ine_p_ine_seq', 'ine_p_ine_seq', 'ine_p_ine_seq', 'ine_p_nfe_num', 'ine_p_nfe_num', 'ine_p_nfe_num', 'ine_p_nfe_num', 'ine_p_nfe_num', 'ine_p_nfe_serie', 'ine_p_nfe_serie', 'ine_p_nfe_serie', 'ine_p_nfe_serie', 'ine_p_nfe_serie', 'ine_p_nfe_tipo', 'ine_p_nfe_tipo', 'ine_p_nfe_tipo', 'ine_p_nfe_tipo', 'ine_p_nfe_tipo', 'ine_p_fne_cod', 'ine_p_fne_cod', 'ine_p_fne_cod', 'ine_p_fne_cod', 'ine_p_fne_cod'],
            ['ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num', 'ine_nfe_tipo', 'ine_seq', 'ine_fne_cod', 'ine_nfe_serie', 'ine_nfe_num'],
        );
    }

    public function pti(): BelongsTo
    {
        return $this->belongsTo(
            Pti::class,
            ['ine_p_pti_cod'],
            ['pti_cod'],
        );
    }
}
