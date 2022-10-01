<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ufe extends OracleEloquent
{
    use Compoships;

    protected $table = 'ufe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ufe_pai_sigla', 'ufe_sigla'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pai(): BelongsTo
    {
        return $this->belongsTo(
            Pai::class,
            ['ufe_pai_sigla'],
            ['pai_sigla'],
        );
    }
}
