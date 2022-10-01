<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rtc extends OracleEloquent
{
    use Compoships;

    protected $table = 'rtc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rtc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rtc_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function pln(): BelongsTo
    {
        return $this->belongsTo(
            Pln::class,
            ['rtc_pln_cod', 'rtc_pln_cod', 'rtc_cnv_cod', 'rtc_cnv_cod'],
            ['pln_cod', 'pln_cnv_cod', 'pln_cod', 'pln_cnv_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rtc_psv_agenda', 'rtc_psv_solic'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rtc_smk_cod_taxa', 'rtc_smk_cod_taxa', 'rtc_smk_tipo_taxa', 'rtc_smk_tipo_taxa'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
