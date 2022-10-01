<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'tnc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tnc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['tnc_qst_cod'],
            ['qst_cod'],
        );
    }

    public function tev(): BelongsTo
    {
        return $this->belongsTo(
            Tev::class,
            ['tnc_ini_tev_cod'],
            ['tev_cod'],
        );
    }
}
