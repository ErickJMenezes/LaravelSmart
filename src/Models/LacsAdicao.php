<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LacsAdicao extends OracleEloquent
{
    use Compoships;

    protected $table = 'lacs_adicao';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lcs_adc_cct_cod', 'lcs_adc_exc_id', 'lcs_adc_lacs_cod', 'lcs_adc_lcs_mes'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function excLacs(): BelongsTo
    {
        return $this->belongsTo(
            ExcLacs::class,
            ['lcs_adc_lcs_mes', 'lcs_adc_lcs_mes', 'lcs_adc_lcs_mes', 'lcs_adc_lacs_cod', 'lcs_adc_lacs_cod', 'lcs_adc_lacs_cod', 'lcs_adc_exc_id', 'lcs_adc_exc_id', 'lcs_adc_exc_id'],
            ['exc_lcs_mes', 'exc_lcs_lacs_cod', 'exc_lcs_exc_id', 'exc_lcs_mes', 'exc_lcs_lacs_cod', 'exc_lcs_exc_id', 'exc_lcs_mes', 'exc_lcs_lacs_cod', 'exc_lcs_exc_id'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['lcs_adc_cct_cod'],
            ['cct_cod'],
        );
    }
}
