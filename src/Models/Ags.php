<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Ags extends OracleEloquent
{
    use Compoships;

    protected $table = 'ags';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ags_gsv_cod', 'ags_smk_cod', 'ags_smk_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gsv(): BelongsTo
    {
        return $this->belongsTo(
            Gsv::class,
            ['ags_gsv_cod'],
            ['gsv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ags_smk_cod', 'ags_smk_cod', 'ags_smk_tipo', 'ags_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
