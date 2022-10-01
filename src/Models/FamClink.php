<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FamClink extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fam_c_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fam(): BelongsTo
    {
        return $this->belongsTo(
            Fam::class,
            ['fam_c_dthr', 'fam_c_dthr', 'fam_c_cod_amostra', 'fam_c_cod_amostra'],
            ['fam_dthr', 'fam_cod_amostra', 'fam_dthr', 'fam_cod_amostra'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['fam_c_smk_cod', 'fam_c_smk_cod', 'fam_c_smk_tipo', 'fam_c_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
