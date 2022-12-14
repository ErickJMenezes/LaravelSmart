<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Hcf extends OracleEloquent
{
    use Compoships;

    protected $table = 'hcf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['hcf_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hcfs(): HasMany
    {
        return $this->hasMany(
            Hcf::class,
            ['hcf_cod'],
            ['hcf_hcf_cod'],
        );
    }
}
