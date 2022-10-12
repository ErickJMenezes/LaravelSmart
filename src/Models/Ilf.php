<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ilf extends OracleEloquent
{
    use Compoships;

    protected $table = 'ilf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ilf_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ilfFile(): BelongsTo
    {
        return $this->belongsTo(
            IlfFile::class,
            ['ilf_file_id'],
            ['ilf_f_id'],
        );
    }
}
