<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LalurNlanc extends OracleEloquent
{
    use Compoships;

    protected $table = 'lalur_nlanc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lalur_nl_exc_id', 'lalur_nl_lalur_cod', 'lalur_nl_mes', 'lalur_nl_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function excLalur(): BelongsTo
    {
        return $this->belongsTo(
            ExcLalur::class,
            ['lalur_nl_mes', 'lalur_nl_mes', 'lalur_nl_mes', 'lalur_nl_lalur_cod', 'lalur_nl_lalur_cod', 'lalur_nl_lalur_cod', 'lalur_nl_exc_id', 'lalur_nl_exc_id', 'lalur_nl_exc_id'],
            ['exc_llr_mes', 'exc_llr_lalur_cod', 'exc_llr_exc_id', 'exc_llr_mes', 'exc_llr_lalur_cod', 'exc_llr_exc_id', 'exc_llr_mes', 'exc_llr_lalur_cod', 'exc_llr_exc_id'],
        );
    }
}
