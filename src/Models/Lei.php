<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Lei extends OracleEloquent
{
    use Compoships;

    protected $table = 'lei';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['lei_dthr', 'lei_usr_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['lei_img_cod'],
            ['img_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['lei_usr_cod'],
            ['usr_login'],
        );
    }
}
