<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tev extends OracleEloquent
{
    use Compoships;

    protected $table = 'tev';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tev_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['tev_qst_cod'],
            ['qst_cod'],
        );
    }
}
