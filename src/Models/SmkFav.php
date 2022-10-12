<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SmkFav extends OracleEloquent
{
    use Compoships;

    protected $table = 'smk_fav';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['smk_fav_usr_login', 'smk_fav_smk_cod', 'smk_fav_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['smk_fav_smk_cod', 'smk_fav_smk_cod', 'smk_fav_smk_tipo', 'smk_fav_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['smk_fav_usr_login'],
            ['usr_login'],
        );
    }
}
