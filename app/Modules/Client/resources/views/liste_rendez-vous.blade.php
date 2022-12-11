@extends('layouts.master')
@include('layouts.sidebar-client')
@section('title-page')
Mes rendez-vous
@stop


@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashobard</a></li>
<li class="breadcrumb-item">Mes rendez-vous</li>
  
@stop

@section('content')

  <table id="example" class="table  table-bordered" style="width:100%">
    <thead>
        <tr >
            
            <th>Date prestation</th>
            <th>Type prestataion</th>
            <th>Prestataire</th>
            <th>Adresse</th>
            <th>Statut</th>
        </tr>
    </thead>
    <tbody>
        <tr>
             
            <td>28/12/2022/10:30</td>
            <td>coiffure</td>
            <td>jade delanny</td>
            
            <td>Autoroute A1 , App 23
                Rue Doliitle 71000/td>
            <td><span class="badge rounded-pill bg-success">A venir</span></td>
            

            
        </tr>
        
        <tr>
             
            <td>21/11/2022/10:30</td>
            <td>coiffure</td>
            <td>jade delanny</td>
            
            <td>Autoroute A1 , App 23
                Rue Doliitle 71000/td>
            <td><span class="badge rounded-pill bg-danger">Terminé</span></td>
            

            
        </tr>
        <tr>
             
            <td>21/11/2022/10:30</td>
            <td>coiffure</td>
            <td>jade delanny</td>
            
            <td>Autoroute A1 , App 23
                Rue Doliitle 71000/td>
            <td><span class="badge rounded-pill bg-danger">Terminé</span></td>
            

            
        </tr>
        <tr>
             
            <td>21/11/2022/10:30</td>
            <td>coiffure</td>
            <td>jade delanny</td>
            <td>Autoroute A1 , App 23
                Rue Doliitle 71000/td>
            <td><span class="badge rounded-pill bg-danger">Terminé</span></td>
            

            
        </tr>
       
  
       
        
     
     
      
    </tbody>
  
</table>

@stop