<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $fillable=['fournisseur_id','nom','adresse','tel','pays','email'];
   /**
    * Get all of the facturefournisseur for the Fournisseur
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function facturefournisseur(): HasMany
   {
       return $this->hasMany(Facturefournisseur::class, 'foreign_key', 'local_key');
   }
}

