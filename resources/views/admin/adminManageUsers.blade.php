@extends('layouts.admin')

@section('content')
<div class="row ">
    <div class=" col-md-offset-1" style="margin-right: 100px;">
<div class=""> 
    <table class="table table-striped "  style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Image</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        
             <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td><img src="{{$user->image}}" width="40px" height="40px" "></td>  
                     
                        <td>
                         <a href="{{URL('/adminManageUsers')}}/{{$user->id}}">
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