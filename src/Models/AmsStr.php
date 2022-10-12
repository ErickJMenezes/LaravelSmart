<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AmsStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'ams_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ams_s_smk_tipo', 'ams_s_amo_cod', 'ams_s_smk_cod', 'ams_s_str_solic'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ams(): BelongsTo
    {
        return $this->belongsTo(
            Ams::class,
            ['ams_s_amo_cod', 'ams_s_amo_cod', 'ams_s_amo_cod', 'ams_s_smk_cod', 'ams_s_smk_cod', 'ams_s_smk_cod', 'ams_s_smk_tipo', 'ams_s_smk_tipo', 'ams_s_smk_tipo'],
            ['ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo', 'ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo', 'ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ams_s_str_solic'],
            ['str_cod'],
        );
    }
}
