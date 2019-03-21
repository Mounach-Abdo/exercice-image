@extends('layouts.master')
@section('content')
<div class="container">
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form><br><br>
    @foreach ($articles as $article)
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Article Number : {{$article->id}}
                </div>
            </div> 
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        Name article :
                    </div>
                    <div class="col-md-8">
                        {{ $article->name }}
                    </div>
                </div>
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
                        @foreach($article->pictures as $picture)
                        <img src="{{ Storage::url($picture->path) }}"  class="img-fluid" alt="Erreur ">
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <form action="/articles/{{$article->id}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-danger" name="" id="" value="Delete">
                            <input type="hidden" name="_method" value="delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach    
</div>
@endsection