<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgEmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_emp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_emp_emp_cod', 'img_emp_img_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['img_emp_emp_cod'],
            ['emp_cod'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_emp_img_cod'],
            ['img_cod'],
        );
    }
}
