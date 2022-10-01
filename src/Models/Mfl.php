<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mfl extends OracleEloquent
{
    use Compoships;

    protected $table = 'mfl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mfl_dthr', 'mfl_usr_remetente'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['mfl_loc_origem_chamada'],
            ['loc_cod'],
        );
    }
}
