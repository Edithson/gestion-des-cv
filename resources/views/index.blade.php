@extends('layout')

@section('content')
<table class="table table-striped">
@forelse ($cv as $unCv)
    <tr>
        <td><img class="image-mini" src="{{Storage::url($unCv->photo)}}" alt=""></td>
        <td>{{$unCv->email}}</td>
        <td>{{$unCv->nom_prenom}}</td>
        <th><a href="{{route('cv.show', $unCv)}}"><button class="btn btn-primary">Voire plus</button></a></th>
    </tr>
    
@empty
    <p>Aucun CV trouvé</p>
@endforelse
</table>
@endsection