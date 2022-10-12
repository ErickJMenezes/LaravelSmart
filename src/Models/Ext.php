<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ext extends OracleEloquent
{
    use Compoships;

    protected $table = 'ext';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ext_osm_serie', 'ext_smm_num', 'ext_mns_num', 'ext_mns_serie', 'ext_osm_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sgo(): BelongsTo
    {
        return $this->belongsTo(
            Sgo::class,
            ['ext_sgo_cod'],
            ['sgo_cod'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['ext_ccr_psv'],
            ['ccr_cod'],
        );
    }

    public function mns(): BelongsTo
    {
        return $this->belongsTo(
            Mns::class,
            ['ext_mns_num', 'ext_mns_num', 'ext_mns_serie', 'ext_mns_serie'],
            ['mns_num', 'mns_serie', 'mns_num', 'mns_serie'],
        );
    }

    public function mog(): BelongsTo
    {
        return $this->belongsTo(
            Mog::class,
            ['ext_mog_cod'],
            ['mog_cod'],
        );
    }

    public function mte(): BelongsTo
    {
        return $this->belongsTo(
            Mte::class,
            ['ext_mte_seq', 'ext_mte_seq', 'ext_mte_serie', 'ext_mte_serie'],
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
        );
    }
}
