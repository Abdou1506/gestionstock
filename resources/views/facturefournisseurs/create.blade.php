@extends('pluto')
@section('titre')
    Nom de la facture
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 m-3 mx-auto shadow p-2">
        <form action="{{route('facturefournisseurs.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="date" class="label-control">Date</label>
                <input type="date" class="form-control" name="date">

            </div>
            <div class="mb-3">
                <label for="date" class="label-control">qte</label>
                <input type="text" class="form-control" name="qte">

            </div>
            <div class="mb-3">
                <label for="date" class="label-control">prix</label>
                <input type="text" class="form-control" name="prix">

            </div>
            <div class="mb-3">
                <label for="libelle" class="label-control">Nom fournisseur</label>
                <select name="categorie_id" class="form-select" id="">
                    @foreach ($fournisseurs as $f)
                        <option value="{{ $c->id }}">{{ $f->nom }}</option>
                    @endforeach
    
                </select>
            </div>
            <div class="mb-3 rounded">
                <button class="btn btn-primary col-12">Ajouter</button>
            </div>
           
        </form>
    </div>
</div>
    
@endsection