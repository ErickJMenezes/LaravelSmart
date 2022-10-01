<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bpt extends OracleEloquent
{
    use Compoships;

    protected $table = 'bpt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bpt_pat_cod', 'bpt_bul_med'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bul(): BelongsTo
    {
        return $this->belongsTo(
            Bul::class,
            ['bpt_bul_med'],
            ['bul_med'],
        );
    }

    public function pat(): BelongsTo
    {
        return $this->belongsTo(
            Pat::class,
            ['bpt_pat_cod'],
            ['pat_cod'],
        );
    }
}
