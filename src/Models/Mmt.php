<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mmt extends OracleEloquent
{
    use Compoships;

    protected $table = 'mmt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mmt_smk_tipo', 'mmt_itm_cod', 'mmt_tme_cod', 'mmt_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['mmt_smk_cod', 'mmt_smk_cod', 'mmt_smk_tipo', 'mmt_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function itm(): BelongsTo
    {
        return $this->belongsTo(
            Itm::class,
            ['mmt_itm_cod', 'mmt_itm_cod', 'mmt_tme_cod', 'mmt_tme_cod'],
            ['itm_cod', 'itm_tme_cod', 'itm_cod', 'itm_tme_cod'],
        );
    }
}
