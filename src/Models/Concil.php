<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Concil extends OracleEloquent
{
    use Compoships;

    protected $table = 'concil';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['data_venda', 'n_cartao', 'controle', 'parcela', 'transacao'];

    protected $connection = 'smart';

    protected $guarded = [];
}
