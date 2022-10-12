<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MteNfl extends OracleEloquent
{
    use Compoships;

    protected $table = 'mte_nfl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mte_n_mte_serie', 'mte_n_mte_seq', 'mte_n_nfl_num', 'mte_n_nfl_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['mte_n_mte_seq', 'mte_n_mte_seq', 'mte_n_mte_serie', 'mte_n_mte_serie'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['mte_n_nfl_num', 'mte_n_nfl_num', 'mte_n_nfl_serie', 'mte_n_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }
}
