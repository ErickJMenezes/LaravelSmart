<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rec extends OracleEloquent
{
    use Compoships;

    protected $table = 'rec';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rec_osm_serie', 'rec_osm_num', 'rec_smm', 'rec_dt_receb'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['rec_mns_num', 'rec_mns_num', 'rec_mns_serie', 'rec_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function rep(): BelongsTo
    {
        return $this->belongsTo(
            Rep::class,
            ['rec_rep_num', 'rec_rep_num', 'rec_rep_serie', 'rec_rep_serie'],
            ['rep_num', 'rep_serie', 'rep_num', 'rep_serie'],
        );
    }
}
