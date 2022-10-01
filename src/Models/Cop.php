<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cop extends OracleEloquent
{
    use Compoships;

    protected $table = 'cop';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cop_num', 'cop_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['cop_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cop_usr_login'],
            ['usr_login'],
        );
    }
}
