<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ede extends OracleEloquent
{
    use Compoships;

    protected $table = 'ede';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ede_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function edes(): HasMany
    {
        return $this->hasMany(
            Ede::class,
            ['ede_cod'],
            ['ede_ede_cod_sucessor'],
        );
    }
}
