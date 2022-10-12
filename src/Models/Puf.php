<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Puf extends OracleEloquent
{
    use Compoships;

    protected $table = 'puf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['puf_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ufe(): BelongsTo
    {
        return $this->belongsTo(
            Ufe::class,
            ['puf_pai_sigla', 'puf_pai_sigla', 'puf_ufe_sigla', 'puf_ufe_sigla'],
            ['ufe_pai_sigla', 'ufe_sigla', 'ufe_pai_sigla', 'ufe_sigla'],
        );
    }
}
