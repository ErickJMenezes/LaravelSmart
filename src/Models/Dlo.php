<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dlo extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlo';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlo_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function edg(): BelongsTo
    {
        return $this->belongsTo(
            Edg::class,
            ['dlo_edg_cod', 'dlo_edg_cod', 'dlo_edg_tipo', 'dlo_edg_tipo'],
            ['edg_cod', 'edg_tipo', 'edg_cod', 'edg_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dlo_usr_login'],
            ['usr_login'],
        );
    }
}
