<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    //protected $fillable=['name','price','stock','description','photopath','brand_id','category_id',];
    protected $guarded=[];
    public function category()
    {
        return $this-> belongsTo(category::class);
    }
    public function brand()
    {
        return $this-> belongsTo(brand::class);
    }
}
