<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcLalur extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc_lalur';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_llr_lalur_cod', 'exc_llr_exc_id', 'exc_llr_mes'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['exc_llr_exc_id'],
            ['exc_id'],
        );
    }

    public function lalurCt(): BelongsTo
    {
        return $this->belongsTo(
            LalurCt::class,
            ['exc_llr_lalur_cod'],
            ['lalur_ct_cod'],
        );
    }
}
