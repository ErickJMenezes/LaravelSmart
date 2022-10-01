<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Qau extends OracleEloquent
{
    use Compoships;

    protected $table = 'qau';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['qau_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function qst(): BelongsTo
    {
        return $this->belongsTo(
            Qst::class,
            ['qau_qst_cod'],
            ['qst_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['qau_usr_login'],
            ['usr_login'],
        );
    }
}
