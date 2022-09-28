<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Category extends Model implements Auditable
{
    use HasFactory;
    protected $guarded = [];

    use \OwenIt\Auditing\Auditable;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
