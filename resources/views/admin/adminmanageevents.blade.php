@extends('layouts.admin')

@section('content')
<div class="row ">
	<div class=" col-md-offset-1" style="margin-right: 100px;">
<div class=""> 
    <table class="table table-striped "  style="width:100%;">
        <thead>
            <tr>
                <th>event title</th>
                <th>Data</th>
                <th>Start time</th>
                <th>End time</th>
                <th>Description</th>
                <th>Location</th>
                <th>Image</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
        
             <tr>
                <td>{{$event->title}}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->start_time}}</td>
                <td>{{$event->end_time}} </td>
                <td>{{$event->description}}</td>
                <td>{{$event->location->title}}</td>
                <td><img src="{{$event->image}}" width="40px" height="40px" "></td>  
                <td>{{$event->approved}}</td>        
              
        
                	
                    
                        <!-- Edit -->
                        <td>
                        <a href="#" id="{{$event->id}}">
                            <i class="fa fa-check-square-o" aria-hidden="true" id="approved" style="color:blue;"></i>
                        </a>
                        
                       
                        <!-- Delete -->
                         <a href="#"  id="{{$event->id}}">
                             <i class="fa fa-times-circle-o" aria-hidden="true" id="rejected"  style="color: red;"></i></a>
                            </td>
                </tr>
          @endforeach                   
          
        </tbody>
    </table>
        </div>
	</div>
</div>
<script type="text/javascript">
     $('td').on('click', 'a', function(event){
            event.preventDefault();

            var id= $(this).attr('id');
            var event = $(this).find('i').attr('id');
            $.ajax({
                url : "{{url('/admainmanageevents')}}/"+id,
                method: 'post',
                data:{"event": event, _token: '{{ csrf_token() }}'},
                success: function(data){
                    window.location.reload();
                },
                error: function(error){
                    console.log(error);
                }
            });              
      });
</script>


@endsection