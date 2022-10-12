<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hhs extends OracleEloquent
{
    use Compoships;

    protected $table = 'hhs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hhs_str_unid', 'hhs_ctf_tipo', 'hhs_ctf_cod', 'hhs_smk_tipo', 'hhs_psv_cod', 'hhs_dia', 'hhs_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hab(): BelongsTo
    {
        return $this->belongsTo(
            Hab::class,
            ['hhs_ctf_cod', 'hhs_ctf_cod', 'hhs_ctf_cod', 'hhs_ctf_tipo', 'hhs_ctf_tipo', 'hhs_ctf_tipo', 'hhs_psv_cod', 'hhs_psv_cod', 'hhs_psv_cod'],
            ['hab_ctf', 'hab_tpctf', 'hab_med', 'hab_ctf', 'hab_tpctf', 'hab_med', 'hab_ctf', 'hab_tpctf', 'hab_med'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['hhs_smk_cod', 'hhs_smk_cod', 'hhs_smk_tipo', 'hhs_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
