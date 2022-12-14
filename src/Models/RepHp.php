<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RepHp extends OracleEloquent
{
    use Compoships;

    protected $table = 'rep_hp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rep_hp_num', 'rep_hp_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gmr(): BelongsTo
    {
        return $this->belongsTo(
            Gmr::class,
            ['rep_hp_gmr_cod'],
            ['gmr_cod'],
        );
    }
}
