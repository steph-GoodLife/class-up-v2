<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{

    protected $table = 'groupe';

    protected $primaryKey = 'idgroupe';

    protected $guarded = [];

    public $timestamps = false;

    protected $fillable = ['nom', 'acronyme','professeur_idprofesseur'];


    public function professeur()
    {

        return $this->belongsToMany(Professeur::class)->withPivot('groupe_has_professeur');
    }


    public function matiere()
    {

        return $this->hasMany(Matiere::class);
    }



}
