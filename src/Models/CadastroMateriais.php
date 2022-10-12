<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CadastroMateriais extends OracleEloquent
{
    use Compoships;

    protected $table = 'cadastro_materiais';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cod_mat_sap'];

    protected $connection = 'smart';

    protected $guarded = [];
}
