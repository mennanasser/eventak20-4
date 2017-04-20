
<!DOCTYPE html>
<html>
<head>
<title>Amazing Event</title>
<style type="text/css">
	ul li:hover > ul{display:block;}
</style>
<!-- <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script> -->
<!-- //js -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{ asset('css/style.css') }}"></head>
<body>
<nav class="navbar navbar-default ">
      <a class="navbar-brand " href="{{URL('/')}}">Eventak</a>

	@if (!(Auth::guest()))
    	<ul class="nav navbar-nav">
     
          <li class="dropdown active">
              <a >
                {{Auth::user()->name}}'s Profile
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{URL('userprofile')}}">My Profile</a></li>
              <li><a href="{{URL('editProfile')}}">Account Settings</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
    </ul>
    @endif
</nav>


	<div class="main"> <br><br>
		<!-- <h1 class="w3layouts_head">Create Your Amazing Event</h1> -->
		<div class="w3layouts_main_grid">
			<form method="post" class="w3_form_post" enctype="multipart/form-data">
			{{csrf_field()}}
				
			<div class="agileits_main_grid w3_agileits_main_grid">
			<h1 class="w3layouts_head">Edit Your Amazing Event</h1>

				<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<div class="wthree_grid">
							<h5>Name * </h5>
							<input type="text" name="title" value="{{$event->title}}">
					</div>
					<br>
					@if ($errors->has('title'))
					<div class="alert alert-danger">
						<strong>{{ $errors->first('title') }}</strong>
					</div>
					@endif
				</div>

			</div>
			
				<!--hidden till choise other-->
				<!-- <input type="hidden" name="location" placeholder="" required=""> -->

				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Location *</h5>
						<select id="location" name="location" required="">
							@foreach($locations as $location)
							@if($event->location_id == $location->id)
							<option value="{{$location->id}}" selected> 
								{{$location->title}}
							</option>
							@else
							<option value="{{$location->id}}"> 
								{{$location->title}}
							</option>
							@endif
							@endforeach
						</select>
					</div>
				</div>

				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Category *</h5>
						<select id="category" name="category" required="">
							@foreach($categories as $category)
							@if($event->category_id == $category->id)
							<option value="{{$category->id}}" selected>
								   {{$category->name}}
							</option>
							@else
							<option value="{{$category->id}}">
								   {{$category->name}}
							</option>
							@endif
							@endforeach
						</select>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">

			<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
				<div class="wthree_grid">
				<h5>Date *</h5>
					<div>
					<input name="date" type="date" value="{{$event->date}}">
					</div>
				</div>
				<br>
				@if ($errors->has('date'))
				<div class="alert alert-danger">
					<strong>{{ $errors->first('date') }}</strong>
				</div>
				@endif
			</div>
					</div>
				</div>
				
			<div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
				<div class="wthree_grid">
					<h5>Start Time *</h5>
					<input type="time" name="start_time" value="{{$event->start_time}}">
				</div>
				<br>
				@if ($errors->has('start_time'))
				<div class="alert alert-danger">
					<strong>{{ $errors->first('start_time') }}</strong>
				</div>
				@endif
			</div>
					

			<div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
				<div class="wthree_grid">
				
					<h5>End Time *</h5>
					<input type="time" name="end_time" value="{{$event->end_time}}">
				
				</div>
				<br>
				@if ($errors->has('end_time'))
				<div class="alert alert-danger">
					<strong>{{ $errors->first('end_time') }}</strong>
				</div>
				@endif
			</div>
		
			<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
				<div class="wthree_grid">
			
					<h5>Description *</h5>
					<textarea class="form-control" rows="10" cols="70" name="description"> {{$event->description}}</textarea>
				
				</div>
				<br>
				@if ($errors->has('description'))
				<div class="alert alert-danger">
					<strong>{{ $errors->first('description') }}</strong>
				</div>
				@endif
			</div>
	
				<div class="wthree_grid">
				<div>
				<h5>Event cover *</h5><input type="file" name="image" >
				</div>
				
				<div class="w3_main_grid">
					<div class="w3_main_grid_right">
						<input type="submit" name="save" value="Save Changes" >
					</div>
				</div>
			</form>
		
		</div>
		
		<!-- Calendar -->			
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
	</div>
</body>

   <script src="{{URL::asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>
</html>