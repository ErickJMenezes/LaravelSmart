<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PacsImg extends OracleEloquent
{
    use Compoships;

    protected $table = 'pacs_img';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pacs_acession_number'];

    protected $connection = 'smart';

    protected $guarded = [];
}
