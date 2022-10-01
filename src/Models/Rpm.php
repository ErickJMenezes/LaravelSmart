<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpm extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rpm_qst_cod', 'rpm_num', 'rpm_apq_cod', 'rpm_pgt_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function rpa(): BelongsTo
    {
        return $this->belongsTo(
            Rpa::class,
            ['rpm_pgt_cod', 'rpm_pgt_cod', 'rpm_pgt_cod', 'rpm_apq_cod', 'rpm_apq_cod', 'rpm_apq_cod', 'rpm_qst_cod', 'rpm_qst_cod', 'rpm_qst_cod'],
            ['rpa_pgt_cod', 'rpa_apq_cod', 'rpa_qst_cod', 'rpa_pgt_cod', 'rpa_apq_cod', 'rpa_qst_cod', 'rpa_pgt_cod', 'rpa_apq_cod', 'rpa_qst_cod'],
        );
    }
}
