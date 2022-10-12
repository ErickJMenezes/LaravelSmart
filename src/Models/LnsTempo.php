<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LnsTempo extends OracleEloquent
{
    use Compoships;

    protected $table = 'lns_tempo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lns_t_porte', 'lns_t_smk_cod', 'lns_t_smk_cod_crg', 'lns_t_cnv_cod', 'lns_t_smk_tipo', 'lns_t_smk_tipo_crg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function lns(): BelongsTo
    {
        return $this->belongsTo(
            Lns::class,
            ['lns_t_porte', 'lns_t_porte', 'lns_t_porte', 'lns_t_porte', 'lns_t_smk_cod', 'lns_t_smk_cod', 'lns_t_smk_cod', 'lns_t_smk_cod', 'lns_t_smk_tipo', 'lns_t_smk_tipo', 'lns_t_smk_tipo', 'lns_t_smk_tipo', 'lns_t_cnv_cod', 'lns_t_cnv_cod', 'lns_t_cnv_cod', 'lns_t_cnv_cod'],
            ['lns_porte', 'lns_smk_cod', 'lns_smk_tipo', 'lns_cnv_cod', 'lns_porte', 'lns_smk_cod', 'lns_smk_tipo', 'lns_cnv_cod', 'lns_porte', 'lns_smk_cod', 'lns_smk_tipo', 'lns_cnv_cod', 'lns_porte', 'lns_smk_cod', 'lns_smk_tipo', 'lns_cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['lns_t_smk_cod_crg', 'lns_t_smk_cod_crg', 'lns_t_smk_tipo_crg', 'lns_t_smk_tipo_crg'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
