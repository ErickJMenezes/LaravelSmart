<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LabMap extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lab_map_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ams(): BelongsTo
    {
        return $this->belongsTo(
            Ams::class,
            ['lab_map_ams_amo_cod', 'lab_map_ams_amo_cod', 'lab_map_ams_amo_cod', 'lab_map_ams_smk_cod', 'lab_map_ams_smk_cod', 'lab_map_ams_smk_cod', 'lab_map_ams_smk_tipo', 'lab_map_ams_smk_tipo', 'lab_map_ams_smk_tipo'],
            ['ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo', 'ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo', 'ams_amo_cod', 'ams_smk_cod', 'ams_smk_tipo'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['lab_map_emp_cod'],
            ['emp_cod'],
        );
    }
}
