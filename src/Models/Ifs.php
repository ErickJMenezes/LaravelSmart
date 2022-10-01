<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ifs extends OracleEloquent
{
    use Compoships;

    protected $table = 'ifs';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ifs_str_cod', 'ifs_fcf_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fcf(): BelongsTo
    {
        return $this->belongsTo(
            Fcf::class,
            ['ifs_fcf_cod'],
            ['fcf_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ifs_str_cod'],
            ['str_cod'],
        );
    }
}
