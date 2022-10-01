<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class QstSmk extends OracleEloquent
{
    use Compoships;

    protected $table = 'qst_smk';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qst_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['qst_smk_qst_cod'],
            ['qst_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['qst_smk_smk_cod', 'qst_smk_smk_cod', 'qst_smk_smk_tipo', 'qst_smk_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['qst_smk_str_cod'],
            ['str_cod'],
        );
    }
}
