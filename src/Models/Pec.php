<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pec extends OracleEloquent
{
    use Compoships;

    protected $table = 'pec';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pec_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pecs(): HasMany
    {
        return $this->hasMany(
            Pec::class,
            ['pec_id'],
            ['pec_id_pai'],
        );
    }
}
