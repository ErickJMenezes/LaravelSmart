<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EcpCirurgFios extends OracleEloquent
{
    use Compoships;

    protected $table = 'ecp_cirurg_fios';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ecp_f_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ecpCirurg(): BelongsTo
    {
        return $this->belongsTo(
            EcpCirurg::class,
            ['ecp_f_smk_cod', 'ecp_f_smk_cod', 'ecp_f_smk_cod', 'ecp_f_smk_tipo', 'ecp_f_smk_tipo', 'ecp_f_smk_tipo', 'ecp_f_ecp_id', 'ecp_f_ecp_id', 'ecp_f_ecp_id'],
            ['ecp_c_smk_cod', 'ecp_c_smk_tipo', 'ecp_c_ecp_id', 'ecp_c_smk_cod', 'ecp_c_smk_tipo', 'ecp_c_ecp_id', 'ecp_c_smk_cod', 'ecp_c_smk_tipo', 'ecp_c_ecp_id'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ecp_f_smk_cod_fio', 'ecp_f_smk_cod_fio', 'ecp_f_smk_tipo_fio', 'ecp_f_smk_tipo_fio'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
