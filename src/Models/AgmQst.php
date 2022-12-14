<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class AgmQst extends OracleEloquent
{
    use Compoships;

    protected $table = 'agm_qst';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['agm_q_id', 'agm_q_qst_cod', 'agm_q_apq_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function apq(): BelongsTo
    {
        return $this->belongsTo(
            Apq::class,
            ['agm_q_apq_cod', 'agm_q_apq_cod', 'agm_q_qst_cod', 'agm_q_qst_cod'],
            ['apq_cod', 'apq_qst_cod', 'apq_cod', 'apq_qst_cod'],
        );
    }
}
