<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LalurAdicao extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['llr_adc_cct_cod', 'llr_adc_lalur_cod', 'llr_adc_exc_id', 'llr_adc_llr_mes'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function excLalur(): BelongsTo
    {
        return $this->belongsTo(
            ExcLalur::class,
            ['llr_adc_llr_mes', 'llr_adc_llr_mes', 'llr_adc_llr_mes', 'llr_adc_lalur_cod', 'llr_adc_lalur_cod', 'llr_adc_lalur_cod', 'llr_adc_exc_id', 'llr_adc_exc_id', 'llr_adc_exc_id'],
            ['exc_llr_mes', 'exc_llr_lalur_cod', 'exc_llr_exc_id', 'exc_llr_mes', 'exc_llr_lalur_cod', 'exc_llr_exc_id', 'exc_llr_mes', 'exc_llr_lalur_cod', 'exc_llr_exc_id'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['llr_adc_cct_cod'],
            ['cct_cod'],
        );
    }
}
