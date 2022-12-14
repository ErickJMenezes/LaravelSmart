<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exg extends OracleEloquent
{
    use Compoships;

    protected $table = 'exg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exg_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exgs(): HasMany
    {
        return $this->hasMany(
            Exg::class,
            ['exg_cod'],
            ['exg_exg_cod'],
        );
    }
}
