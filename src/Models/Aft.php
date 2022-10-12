<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Aft extends OracleEloquent
{
    use Compoships;

    protected $table = 'aft';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aft_serie', 'aft_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['aft_fne_cod'],
            ['fne_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['aft_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['aft_usr_login', 'aft_usr_login_aut'],
            ['usr_login', 'usr_login'],
        );
    }
}
