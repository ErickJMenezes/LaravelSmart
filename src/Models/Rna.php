<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rna extends OracleEloquent
{
    use Compoships;

    protected $table = 'rna';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rna_rci_serie', 'rna_rci_num', 'rna_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function rci(): BelongsTo
    {
        return $this->belongsTo(
            Rci::class,
            ['rna_rci_num', 'rna_rci_num', 'rna_rci_serie', 'rna_rci_serie'],
            ['rci_num', 'rci_serie', 'rci_num', 'rci_serie'],
        );
    }
}
