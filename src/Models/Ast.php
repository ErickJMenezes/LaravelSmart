<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ast extends OracleEloquent
{
    use Compoships;

    protected $table = 'ast';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ast_sba_cod', 'ast_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['ast_sba_cod'],
            ['sba_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ast_str_cod'],
            ['str_cod'],
        );
    }
}
