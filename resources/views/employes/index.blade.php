@extends('layouts.master')
@section('content')
<br>
<div class="container">
    @foreach ($employes as $employe)
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Employee ID : {{ $employe->id }}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    First name :
                </div>
                <div class="col-md-8">
                    {{ $employe->first_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Last name :
                </div>
                <div class="col-md-8">
                    {{ $employe->last_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                        Created at :
                </div>
                <div class="col-md-8">
                    {{ $employe->created_at }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Updated at :
                </div>
                <div class="col-md-8">
                    {{ $employe->updated_at }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                        <img src="{{ Storage::url($employe->picture->path) }}" class="img-fluid img-thumbnail" alt="erreur" >
                </div>
                <div class="col-md-6">
                <form action="/employes/{{$employe->id}}" method="post"> 
                    @csrf
                        <input type="submit" class="btn btn-danger" name="" id="" value="delete">
                        <input type="hidden" value="delete" name="_method">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endSection