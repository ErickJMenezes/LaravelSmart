<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Acl extends OracleEloquent
{
    use Compoships;

    protected $table = 'acl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['acl_ctf_tipo', 'acl_ctf_cod_filho', 'acl_ctf_cod', 'acl_ctf_tipo_filho'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ctf(): BelongsTo
    {
        return $this->belongsTo(
            Ctf::class,
            ['acl_ctf_cod', 'acl_ctf_cod', 'acl_ctf_tipo', 'acl_ctf_tipo', 'acl_ctf_cod_filho', 'acl_ctf_cod_filho', 'acl_ctf_tipo_filho', 'acl_ctf_tipo_filho'],
            ['ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo', 'ctf_cod', 'ctf_tipo'],
        );
    }
}
