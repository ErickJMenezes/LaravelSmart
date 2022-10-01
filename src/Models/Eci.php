<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Eci extends OracleEloquent
{
    use Compoships;

    protected $table = 'eci';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['eci_rci_serie', 'eci_rci_num', 'eci_funcao'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['eci_psv_cod'],
            ['psv_cod'],
        );
    }

    public function rci(): BelongsTo
    {
        return $this->belongsTo(
            Rci::class,
            ['eci_rci_num', 'eci_rci_num', 'eci_rci_serie', 'eci_rci_serie'],
            ['rci_num', 'rci_serie', 'rci_num', 'rci_serie'],
        );
    }
}
