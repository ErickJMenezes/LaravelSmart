<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rpt extends OracleEloquent
{
    use Compoships;

    protected $table = 'rpt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rpt_minimo', 'rpt_pgt_cod', 'rpt_qst_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pgt(): BelongsTo
    {
        return $this->belongsTo(
            Pgt::class,
            ['rpt_pgt_cod', 'rpt_pgt_cod', 'rpt_qst_cod', 'rpt_qst_cod'],
            ['pgt_cod', 'pgt_qst_cod', 'pgt_cod', 'pgt_qst_cod'],
        );
    }

    public function obs(): BelongsTo
    {
        return $this->belongsTo(
            Obs::class,
            ['rpt_obs_num'],
            ['obs_num'],
        );
    }

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['rpt_qst_cod_aux'],
            ['qst_cod'],
        );
    }
}
