@extends('pluto')
@section('titre')
    liste des factures
@endsection
@section('contenu')
<div class="table_section padding_infor_info">
  <div class="table-responsive-sm">
<table class="table table-bordered" id="factureclients">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date </th>
        <th scope="col">qte </th>
        <th scope="col">nomclient</th>
        <th scope="col">Action</th>
       
        
      </tr>
    </thead>
    <tbody>
        @foreach ($factureclients as $f)
            
      <tr>
        <th scope="row">{{$f->id}}</th>
        <td>{{$f->date}}</td>
        <td>{{$f->qte}}</td>
        <td>{{$f->client_id}}</td>
        
        <td class="btn-group">
          <form method="post" action="{{route('factureclients.destroy',$f->id)}}" onclick="return confirm('supprimer?')">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
          
        </form>
        <a class="btn btn-warning" href="{{route('factureclients.edit',$f)}}"><i class="fa-solid fa-pen-to-square"></i></a>

        </td>
       
        
        
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#factureclients').DataTable();
} );
</script>


@endpush