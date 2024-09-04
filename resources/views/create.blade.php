@extends('layout')

@section('content')
<form action="{{route('cv.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-label">Nom et Prénom :</label>
    <input type="text" class="form-control"  name="nomPrenom" required><br>
    <label for="" class="form-label">Email :</label>
    <input type="email" class="form-control"  name="email" required><br>
    <label for="" class="form-label">Technologie :</label>
    @foreach ($technologies as $technologie)
        <input type="checkbox" class="form-checkbox"  name="{{$technologie->id}}">{{$technologie->nom}}
    @endforeach <br>
    <label for="" class="form-label">Niveau en langue francaise :</label>
    <input type="range" class="form-range"  name="francais" min=0 max=10><br>
    <label for="" class="form-label">Niveau en langue anglaise :</label>
    <input type="range" class="form-range"  name="anglais" min=0 max=10><br>
    <label for="" class="form-label">Nombre d'années d'expériences :</label>
    <input type="number" class="form-control"  min=0 max=20 name="experience"><br>
    <label for="" class="form-label">Sexe :</label>
    <input type="radio" class="form-radio" checked name="sexe" value="masculin"> Masculin
    <input type="radio" class="form-radio" name="sexe" value="feminin"> Féminin <br>
    <label for="" class="form-label">Préférance :</label>
    <select name="preference" class="form-select"  id="">
        <option value="backend">BackEnd</option>
        <option value="frontend">FrontEnd</option>
    </select><br>
    <label for="" class="form-label">Photo :</label>
    <input type="file" class="form-control"  name="photo" required><br><br>
    <input type="submit" value="Enregistrer" class="btn btn-success">
</form>
@endsection