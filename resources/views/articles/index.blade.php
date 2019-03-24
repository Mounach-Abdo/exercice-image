@extends('layouts.master')
@section('content')
<div class="container">
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form><br><br>
    @foreach ($articles as $article)
    <div class="card border-0">
        <div class="card-header">
            <div class="card-title">
                <h2 style="">Brand of this article (clicked): + Serie Number {{$article->id}} </h2>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    @foreach($article->pictures as $picture)
                    <img src="{{ Storage::url($picture->path) }}" class="img-fluid img-thumbnail" alt="Erreur ">
                    @endforeach
                    
                </div>
                <div class="col-lg-3">
                    <span style="color:red;font-size: 180%;font-weight:600;">{{ $article->price }}</span>
                </div>
                <div class="col-lg-3">
                        <div class="col-md-6">
                                <form action="/articles/{{$article->id}}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-danger" name="" id="" value="Delete">
                                    <input type="hidden" name="_method" value="delete">
                                </form>
                            </div>
                    </div>
            </div>
            <div class="card">
                <div class="card-body">
            <div class="row">
                <span class='border-right' style=";"><h4 >CARACTERISTIQUES</h4></span>
            </div>
            <div class="row ">
                <table class="table">
                    <tbody>
                        <tr>
                            <td> Name article :</td>
                            <td>{{ $article->name }}</td>
                        </tr>
                        <tr>
                            <td> Description article :</td>
                            <td> {{ $article->description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endsection