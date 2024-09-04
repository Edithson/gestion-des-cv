@extends('layout')

@section('content')

<div class="mini_conteneur">
    <img class="profil_photo" src="{{Storage::url($cv->photo)}}" alt="">
    <h2>{{$cv->nom_prenom}}</h2>
    <table class="table table-striped info">
        <tr>
            <th>Email</th>
            <td>{{$cv->email}}</td>
        </tr>
        <tr>
            <th>sexe</th>
            <td>{{$cv->sexe}}</td>
        </tr>
        <tr>
            <th>Technologies</th>
            <td>
                @forelse ($cv->technologies as $technologie)
                    {{$technologie->nom}}, 
                @empty
                    <p>Aucunes technologies</p>
                @endforelse
            </td>
        </tr>
        <tr>
            <th>Niveau en français</th>
            <td>{{$cv->niveau_francais}}/10</td>
        </tr>
        <tr>
            <th>Niveau en anglais</th>
            <td>{{$cv->niveau_anglais}}/10</td>
        </tr>
        <tr>
            <th>Préférence</th>
            <td>{{$cv->preference}}</td>
        </tr>
    </table>
</div>
<div class="div_btn">
    <a class="edit" href="{{route('cv.edit', $cv)}}"><button class="btn btn-primary">Mettre à jour</button></a>
    <form action="{{route('cv.destroy', $cv)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Supprimer" class="btn btn-danger">
    </form>
</div>
@endsection