<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PreDt extends OracleEloquent
{
    use Compoships;

    protected $table = 'pre_dt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pre_d_smk_tipo', 'pre_d_smk_cod', 'pre_d_tab_cod', 'pre_d_dt_ini'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['pre_d_smk_cod', 'pre_d_smk_cod', 'pre_d_smk_tipo', 'pre_d_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['pre_d_tab_cod'],
            ['tab_cod'],
        );
    }

    public function umo(): BelongsTo
    {
        return $this->belongsTo(
            Umo::class,
            ['pre_d_umo_sigla', 'pre_d_uco_umo_sigla'],
            ['umo_sigla', 'umo_sigla'],
        );
    }
}
