<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DloMte extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlo_mte';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlo_m_mte_seq', 'dlo_m_dlo_id', 'dlo_m_mte_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dlo(): BelongsTo
    {
        return $this->belongsTo(
            Dlo::class,
            ['dlo_m_dlo_id'],
            ['dlo_id'],
        );
    }

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['dlo_m_mte_seq', 'dlo_m_mte_seq', 'dlo_m_mte_serie', 'dlo_m_mte_serie'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }
}
