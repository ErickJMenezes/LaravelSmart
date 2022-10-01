<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RhpCtfRepasse extends OracleEloquent
{
    use Compoships;

    protected $table = 'rhp_ctf_repasse';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rhp_c_gmr_cod', 'rhp_c_ctf_cod', 'rhp_c_ctf_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['rhp_c_ctf_cod', 'rhp_c_ctf_cod', 'rhp_c_ctf_tipo', 'rhp_c_ctf_tipo'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }

    public function gmr(): BelongsTo
    {
        return $this->belongsTo(
            Gmr::class,
            ['rhp_c_gmr_cod'],
            ['gmr_cod'],
        );
    }
}
