<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Leo extends OracleEloquent
{
    use Compoships;

    protected $table = 'leo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['leo_qst_cod', 'leo_apq_cod', 'leo_seq', 'leo_pgt_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function apq(): BelongsTo
    {
        return $this->belongsTo(
            Apq::class,
            ['leo_qst_cod', 'leo_qst_cod', 'leo_apq_cod', 'leo_apq_cod'],
            ['apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod'],
        );
    }

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['leo_pgt_cod', 'leo_pgt_cod', 'leo_qst_cod', 'leo_qst_cod'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['leo_smk_cod', 'leo_smk_cod', 'leo_smk_tipo', 'leo_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
