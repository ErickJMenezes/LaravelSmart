<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RepUsrPsv extends OracleEloquent
{
    use Compoships;

    protected $table = 'rep_usr_psv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rep_up_psv_cod', 'rep_up_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['rep_up_psv_cod'],
            ['psv_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rep_up_usr_login'],
            ['usr_login'],
        );
    }
}
