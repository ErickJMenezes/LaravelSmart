<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HHctx extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_hctx';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_hctx_id', 'h_hctx_pac_reg', 'h_hctx_hct_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fabEquipo(): BelongsTo
    {
        return $this->belongsTo(
            FabEquipo::class,
            ['h_hctx_fab_equipo_cod'],
            ['fab_equipo_cod'],
        );
    }

    public function hHct(): BelongsTo
    {
        return $this->belongsTo(
            HHct::class,
            ['h_hctx_hct_id', 'h_hctx_hct_id', 'h_hctx_pac_reg', 'h_hctx_pac_reg'],
            ['h_hct_id', 'h_hct_pac_reg', 'h_hct_id', 'h_hct_pac_reg'],
        );
    }
}
