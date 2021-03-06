@extends('layouts.master')
@section('content')
<div class="container">
        @foreach ($articles as $article)
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Article number {{$article->id}} :
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    Description article :
                </div>
                <div class="col-md-8">
                    {{ $article->description }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Price article :
                </div>
                <div class="col-md-8">
                    {{ $article->price }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    @foreach ($article->pictures as $picture)
                    <img src="{{Storage::url($picture->path) }}"  class="img-fluid" alt="Erreur ">
                    @endforeach
                </div>
                <div class="col-md-6">
                <form action="/articles/{{$article->id}}/restore" method="post">
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