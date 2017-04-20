@extends('layouts.admin')

@section('content')
    <div class="row ">
        <div class=" col-md-offset-1" class="" style="margin-right:100px">
    <div class='col-sm-4'>
        <p style="font-size:30px;"><strong>Add Location</strong></p>
    </div>
    <div class='col-sm-8'>
    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-plus"></span>
    </button>

    </div>
                <table class="table table-striped "  style="width:100%;">
                    <thead>
                        <tr>
                            <th>Location Name </th>              
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($locations as $location)        
                         <tr>
                            <td>{{$location->title}}</td>
                            <td>
                                <a href="{{URL('/adminmanagelocation')}}/{{$location->id}}">
                                    <button  class="btn btn-danger" role="button">
                                         <i class="glyphicon glyphicon-trash"> </i>
                                    </button>
                                </a>
                            </td>  
                        </tr>
                    @endforeach                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection




<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h4 class="modal-title">Add New Location</h4>
        </div>

    <div class="modal-body">
        <form action="#" method="post" >
        Name <input type="text" name="location"/><br><br>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
           
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-default">Add</button>
    </div>  
        </form>      
    </div>
    </div>
    </div>
