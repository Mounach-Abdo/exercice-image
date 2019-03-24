@extends('layouts.master')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
               Article ID : {{ $article->id }}
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
                <br>
            <div class="row">
            <div class="col-sm-6">
                <img src="{{ Storage::url($article->pictures[0]->path) }}" class="img-fluid img-thumbnail" alt="Erreur " >
            </div>
        </div>
    </div>
</div>
@endSection