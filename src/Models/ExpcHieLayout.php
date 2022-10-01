<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExpcHieLayout extends OracleEloquent
{
    use Compoships;

    protected $table = 'expc_hie_layout';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['expc_hie_layout_nome', 'expc_hie_expc_hie_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function expcHie(): BelongsTo
    {
        return $this->belongsTo(
            ExpcHie::class,
            ['expc_hie_expc_hie_cod'],
            ['expc_hie_cod'],
        );
    }
}
