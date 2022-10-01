<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class GihContatos extends OracleEloquent
{
    use Compoships;

    protected $table = 'gih_contatos';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['gih_c_id', 'gih_c_dthr_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['gih_c_usr_login'],
            ['usr_login'],
        );
    }
}
