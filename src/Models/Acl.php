<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Acl extends OracleEloquent
{
    use Compoships;

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
