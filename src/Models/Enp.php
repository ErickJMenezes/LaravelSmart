<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Enp extends OracleEloquent
{
    use Compoships;

    protected $table = 'enp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['enp_serie', 'enp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fne(): BelongsTo
    {
        return $this->belongsTo(
            Fne::class,
            ['enp_fne_cod'],
            ['fne_cod'],
        );
    }

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['enp_sba_cod'],
            ['sba_cod'],
        );
    }
}
