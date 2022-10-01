<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgEvt extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_evt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_evt_img_cod', 'img_evt_evt_dthr', 'img_evt_usr_login'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_evt_img_cod'],
            ['img_cod'],
        );
    }

    public function evt(): BelongsTo
    {
        return $this->belongsTo(
            Evt::class,
            ['img_evt_usr_login', 'img_evt_usr_login', 'img_evt_evt_dthr', 'img_evt_evt_dthr'],
            ['evt_usr_login', 'evt_dthr', 'evt_usr_login', 'evt_dthr'],
        );
    }
}
