<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CreStr extends OracleEloquent
{
    use Compoships;

    protected $table = 'cre_str';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cre_s_str_solic', 'cre_s_cre_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cre(): BelongsTo
    {
        return $this->belongsTo(
            Cre::class,
            ['cre_s_cre_cod'],
            ['cre_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cre_s_str_solic'],
            ['str_cod'],
        );
    }
}
