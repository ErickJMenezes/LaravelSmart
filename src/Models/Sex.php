<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sex extends OracleEloquent
{
    use Compoships;

    protected $table = 'sex';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sex_unidade', 'sex_smk_cod', 'sex_smk_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['sex_psv_exe_default'],
            ['psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['sex_smk_cod', 'sex_smk_cod', 'sex_smk_tipo', 'sex_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['sex_str_cod', 'sex_unidade'],
            ['str_cod', 'str_cod'],
        );
    }

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['sex_terc_emp_cod'],
            ['emp_cod'],
        );
    }

    public function atv(): BelongsTo
    {
        return $this->belongsTo(
            Atv::class,
            ['sex_atv_cod'],
            ['atv_cod'],
        );
    }
}
