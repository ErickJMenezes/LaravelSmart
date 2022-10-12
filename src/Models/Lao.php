<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lao extends OracleEloquent
{
    use Compoships;

    protected $table = 'lao';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lao_pgt_cod', 'lao_num', 'lao_qst_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['lao_pgt_cod', 'lao_pgt_cod', 'lao_qst_cod', 'lao_qst_cod'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['lao_smk_cod', 'lao_smk_cod', 'lao_smk_tipo', 'lao_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
