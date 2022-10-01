<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exn extends OracleEloquent
{
    use Compoships;

    protected $table = 'exn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exn_mns_serie', 'exn_mns_num', 'exn_nfl_serie', 'exn_sgo_cod', 'exn_nfl_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sgo(): BelongsTo
    {
        return $this->belongsTo(
            Sgo::class,
            ['exn_sgo_cod'],
            ['sgo_cod'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['exn_mns_num', 'exn_mns_num', 'exn_mns_serie', 'exn_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function nfl(): BelongsTo
    {
        return $this->belongsTo(
            Nfl::class,
            ['exn_nfl_num', 'exn_nfl_num', 'exn_nfl_serie', 'exn_nfl_serie'],
            ['nfl_num', 'nfl_serie', 'nfl_num', 'nfl_serie'],
        );
    }
}
