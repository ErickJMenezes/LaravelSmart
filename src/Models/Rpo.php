<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpo extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpo_num', 'rpo_pgt_cod', 'rpo_qst_cod', 'rpo_apq_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rpa(): BelongsTo
    {
        return $this->belongsTo(
            Rpa::class,
            ['rpo_pgt_cod', 'rpo_pgt_cod', 'rpo_pgt_cod', 'rpo_apq_cod', 'rpo_apq_cod', 'rpo_apq_cod', 'rpo_qst_cod', 'rpo_qst_cod', 'rpo_qst_cod'],
            ['rpa_pgt_cod', 'rpa_apq_cod', 'rpa_qst_cod', 'rpa_pgt_cod', 'rpa_apq_cod', 'rpa_qst_cod', 'rpa_pgt_cod', 'rpa_apq_cod', 'rpa_qst_cod'],
        );
    }
}
