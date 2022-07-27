@extends('pluto')
@section('titre')
    modification de la commande
@endsection
@section('contenu')
<div class="row">
    <div class="col-md-6 mx-auto shadow p-2">
        <form action="{{route('categories.update',$categories->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="datecommande" class="label-control">Date Commande</label>
                <input type="date" class="form-control" name="date" value="{{old('date',$commandes->date)}}">

            </div>
            <div class="mb-3">
                <label for="etat" class="label-control">Etat</label>
                <input type="text" class="form-control" name="etat" value="{{old('etat',$categories->nomcategorie)}}">

            </div>
            <div class="mb-3 rounded">
                <button class="btn btn-primary col-12">Modifier</button>
            </div>
        </form>
    </div>
</div>
    
@endsection
