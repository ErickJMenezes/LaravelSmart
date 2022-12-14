<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hsr extends OracleEloquent
{
    use Compoships;

    protected $table = 'hsr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hsr_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hsrs(): HasMany
    {
        return $this->hasMany(
            Hsr::class,
            ['hsr_cod'],
            ['hsr_hsr_cod'],
        );
    }
}
