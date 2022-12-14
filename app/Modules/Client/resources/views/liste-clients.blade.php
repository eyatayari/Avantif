@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('title-page')
    Liste des clients
@stop

@section('prev-page')
    Factures
@stop
@section('active-page')
    Liste des clients
@stop

@section('content')
    <div class="btn-ajout">
        <form action="{{route('add-client')}}" method="get">
            <button type="submit" class="btn add-btn">+</button>
        </form>
    </div>

    <table id="example" class="table  table-bordered" style="width:100%">
        <thead>
        <tr>

            <th>code client</th>
            <th>Nom et prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Personne référente</th>
            <th>statut</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>

                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->telephone}}</td>
                <td>{{$client->email}}</td>
                @if($client->refnom !=null)
                    <td>{{$client->refnom}}</td>
                @else
                    <td>innexistant</td>
                @endif
                @if(!$client->active)
                    <td><span class="badge rounded-pill bg-danger">hors service</span></td>
                @else
                    <td><span class="badge rounded-pill bg-success">Actif</span></td>
                @endif
                <td id="actionBox">

                    <a id="actionBtn" class=" btnDelete" href="{{route("delete-client",["id"=>$client->id])}}"><i class="bi bi-trash3"></i></a>
                   <!-- <a id="actionBtn" class="btnEdit" href="#"><i class="bi bi-pen"></i></a>
                --></td>


            </tr>

        @endforeach


        </tbody>

    </table>

@stop