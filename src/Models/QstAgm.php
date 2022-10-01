<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class QstAgm extends OracleEloquent
{
    use Compoships;

    protected $table = 'qst_agm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qst_a_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['qst_a_qst_cod'],
            ['qst_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['qst_a_smk_cod', 'qst_a_smk_cod', 'qst_a_smk_tipo', 'qst_a_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
