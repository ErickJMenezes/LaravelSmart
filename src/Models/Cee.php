<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cee extends OracleEloquent
{
    use Compoships;

    protected $table = 'cee';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cee_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function rot(): BelongsTo
    {
        return $this->belongsTo(
            Rot::class,
            ['cee_rot_cod'],
            ['rot_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cee_str_cod'],
            ['str_cod'],
        );
    }
}
