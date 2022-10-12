<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cde extends OracleEloquent
{
    use Compoships;

    protected $table = 'cde';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cde_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ufe(): BelongsTo
    {
        return $this->belongsTo(
            Ufe::class,
            ['cde_pai_sigla', 'cde_pai_sigla', 'cde_ufe_sigla', 'cde_ufe_sigla'],
            ['ufe_pai_sigla', 'ufe_sigla', 'ufe_pai_sigla', 'ufe_sigla'],
        );
    }
}
