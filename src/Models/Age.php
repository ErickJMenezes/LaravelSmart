<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Age extends OracleEloquent
{
    use Compoships;

    protected $table = 'age';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['age_seq'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['age_cde_cod'],
            ['cde_cod'],
        );
    }

    public function ban(): BelongsTo
    {
        return $this->belongsTo(
            Ban::class,
            ['age_ban_seq'],
            ['ban_seq'],
        );
    }
}
