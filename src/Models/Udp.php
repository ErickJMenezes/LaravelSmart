<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Udp extends OracleEloquent
{
    use Compoships;

    protected $table = 'udp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['udp_mte_seq_dep', 'udp_mte_seq_quita', 'udp_mte_serie_quita', 'udp_mte_serie_dep'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['udp_mte_seq_dep', 'udp_mte_seq_dep', 'udp_mte_serie_dep', 'udp_mte_serie_dep', 'udp_mte_seq_quita', 'udp_mte_seq_quita', 'udp_mte_serie_quita', 'udp_mte_serie_quita'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie', 'mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }
}
