<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pre extends OracleEloquent
{
    use Compoships;

    protected $table = 'pre';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pre_smk_tipo', 'pre_smk_cod', 'pre_tab_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['pre_smk_cod', 'pre_smk_cod', 'pre_smk_tipo', 'pre_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['pre_tab_cod'],
            ['tab_cod'],
        );
    }

    public function umo(): BelongsTo
    {
        return $this->belongsTo(
            Umo::class,
            ['pre_uco_umo_sigla', 'pre_umo_sigla'],
            ['umo_sigla', 'umo_sigla'],
        );
    }

    public function unm(): BelongsTo
    {
        return $this->belongsTo(
            Unm::class,
            ['pre_unm_cod'],
            ['unm_cod'],
        );
    }
}
