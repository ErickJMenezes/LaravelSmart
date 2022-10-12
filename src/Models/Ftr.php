<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ftr extends OracleEloquent
{
    use Compoships;

    protected $table = 'ftr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ftr_cod', 'ftr_str_cod', 'ftr_bnc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bnc(): BelongsTo
    {
        return $this->belongsTo(
            Bnc::class,
            ['ftr_bnc_cod', 'ftr_bnc_cod', 'ftr_str_cod', 'ftr_str_cod'],
            ['bnc_cod', 'bnc_str_cod', 'bnc_cod', 'bnc_str_cod'],
        );
    }
}
