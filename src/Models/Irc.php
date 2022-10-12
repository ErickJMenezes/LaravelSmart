<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Irc extends OracleEloquent
{
    use Compoships;

    protected $table = 'irc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['irc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['irc_ccr_destino'],
            ['ccr_cod'],
        );
    }

    public function rcc(): BelongsTo
    {
        return $this->belongsTo(
            Rcc::class,
            ['irc_rcc_cod'],
            ['rcc_cod'],
        );
    }
}
