<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class type extends Model
{
    use HasFactory;

    public function portfolios()
    {
        return $this->HasMany(portfolio::class);
    }
}
