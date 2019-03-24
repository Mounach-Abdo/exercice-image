@extends('layouts.master')
@section('content')
<div class="container">
        @foreach ($employes as $employe)
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Employe number {{$employe->id}} :
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    Employe Name :
                </div>
                <div class="col-md-8">
                    {{ $employe->first_name }}
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                <img src="{{Storage::url($employe->picture->path) }}"  class="img-fluid" alt="Erreur ">
                </div>
                <div class="col-md-6">
                    <!-- restore from trash (button)s -->
                <form action="/employes/{{$employe->id}}/restore" method="post">
                    @csrf
                        <input type="submit" class="btn btn-primary" name="" id="" value="Restore Article">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach    
</div>
@endsection