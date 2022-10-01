<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LdwSapdb extends OracleEloquent
{
    use Compoships;

    protected $table = 'ldw_sapdb';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ldw_s_smk_tipo', 'ldw_s_num', 'ldw_s_smk_cod', 'ldw_s_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
