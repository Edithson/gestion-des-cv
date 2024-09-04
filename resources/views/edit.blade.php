@extends('layout')

@section('content')
<form action="{{route('cv.update', $cv)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="" class="form-label">Nom et Prénom :</label>
    <input type="text" class="form-control"  name="nomPrenom" value="{{$cv->nom_prenom}}" required><br>
    <label for="" class="form-label">Email :</label>
    <input type="email" class="form-control"  name="email" value="{{$cv->email}}" required><br>
    <label for="" class="form-label">Technologie :</label>
    @foreach ($technologies as $technologie)
        <input type="checkbox" class="form-checkbox"  name="{{$technologie->id}}"
        @if ($mes_technologies->count() !== 0)
            @foreach ($mes_technologies as $ma_technologie)
                @if ($ma_technologie->technologie_id == $technologie->id)
                    checked
                @endif
            @endforeach
        @endif
        > {{$technologie->nom}}
    @endforeach <br>
    <label for="" class="form-label">Niveau en langue francaise :</label>
    <input type="range" class="form-range"  name="francais" min=0 max=10 value="{{$cv->niveau_francais}}"><br>
    <label for="" class="form-label">Niveau en langue anglaise :</label>
    <input type="range" class="form-range"  name="anglais" min=0 max=10 value="{{$cv->niveau_anglais}}"><br>
    <label for="" class="form-label">Nombre d'années d'expériences :</label>
    <input type="number" class="form-control"  min=0 max=20 name="experience" value="{{$cv->annee_experience}}"><br>
    <label for="" class="form-label">Sexe :</label>
    <input type="radio" class="form-radio"  name="sexe" value="masculin" @if ($cv->sexe=='masculin') checked @endif> Masculin
    <input type="radio" class="form-radio"  name="sexe" value="feminin" @if ($cv->sexe=='feminin') checked @endif> Féminin <br>
    <label for="" class="form-label">Préférance :</label>
    <select name="preference" class="form-select"  id="">
        <option value="backend" @if ($cv->preference=='backend') selected @endif >BackEnd</option>
        <option value="frontend" @if ($cv->preference=='frontend') selected @endif >FrontEnd</option>
    </select><br>
    <label for="" class="form-label">Photo <i>(Si vous ne selectionnez aucunes image, l'image actuelle sera conservé)</i>:</label>
    <input type="file" class="form-control"  name="photo"><br><br>
    <input type="submit" value="Mettre à jour" class="btn btn-primary">
</form>
@endsection