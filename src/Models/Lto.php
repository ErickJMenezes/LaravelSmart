<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lto extends OracleEloquent
{
    use Compoships;

    protected $table = 'lto';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lto_hsp_num', 'lto_dthr_ini', 'lto_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['lto_hsp_num', 'lto_hsp_num', 'lto_pac_reg', 'lto_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function loc(): BelongsTo
    {
        return $this->belongsTo(
            Loc::class,
            ['lto_loc_cod'],
            ['loc_cod'],
        );
    }

    public function mtl(): BelongsTo
    {
        return $this->belongsTo(
            Mtl::class,
            ['lto_mtl_cod'],
            ['mtl_cod'],
        );
    }
}
