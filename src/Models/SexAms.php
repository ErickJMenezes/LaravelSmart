<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SexAms extends OracleEloquent
{
    use Compoships;

    protected $table = 'sex_ams';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sex_a_unidade', 'sex_a_smk_tipo', 'sex_a_smk_cod', 'sex_a_ind_urg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sex_a_unidade', 'sex_a_str_cod'],
            ['str_cod', 'str_cod'],
        );
    }

    public function ams(): BelongsTo
    {
        return $this->belongsTo(
            Ams::class,
            ['sex_a_amo_cod', 'sex_a_amo_cod', 'sex_a_amo_cod', 'sex_a_smk_cod', 'sex_a_smk_cod', 'sex_a_smk_cod', 'sex_a_smk_tipo', 'sex_a_smk_tipo', 'sex_a_smk_tipo'],
            ['ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo', 'ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo', 'ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo'],
        );
    }
}
