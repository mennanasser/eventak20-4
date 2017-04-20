@extends('layouts.admin')

@section('content')

	<div class="content">
				<div class="container-fluid">
					<div class="row">
				<div class="col-md-6">
							<div class="card">
								<div class="card-header card-chart" >
									<div class="post-img-content">   
                                    <img src="{{asset('css/images/event.png')}}" style= "width:50% ;height:200px;margin-left:100px ;margin-top:10px;";>
                                </div>
								</div>
								<br>
								<div class="card-content">
								<a href="{{URL('admainmanageevents')}}"><h3 class="title" style="margin-left:170px ;color:#00004d;"><strong>Events</strong></h3> </a><br>
								</div>
							</div>
						</div>
							
							<div class="col-md-6">
							<div class="card">
								<div class="card-header card-chart" >
									<div class="post-img-content">   
                                    <img src="{{asset('css/images/user.png')}}" style= "width:50% ;height:200px;margin-left:100px ;margin-top:10px;";>
                                </div>
								</div>
								<br>
								<div class="card-content">
								<a  href="{{URL('adminManageUsers')}}"><h3 class="title" style="margin-left:175px ;color:#00004d"><strong>Users</strong></h3> </a><br>
								</div>
							</div>
						</div>

							<div class="col-md-6">
							<div class="card">
								<div class="card-header card-chart" >
									<div class="post-img-content">   
                                    <img src="{{asset('css/images/category.png')}}" style= "width:60% ;height:200px;margin-left:80px ;margin-top:10px;";>
                                </div>
								</div>
								<br>
								<div class="card-content">
								<a href="{{URL('editCategory')}}">
								<h3 class="title" style="margin-left:155px ;color:#00004d">
								<strong>Category</strong></h3> </a><br>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card">
								<div class="card-header card-chart" >
									<div class="post-img-content">   
                                    <img src="{{asset('css/images/location.png')}}" style= "width:50% ;height:200px;margin-left:110px ;margin-top:10px;";>
                                </div>
								</div>
								<br>
								<div class="card-content">
								<a href="{{URL('adminmanagelocation')}}"><h3 class="title" style="margin-left:170px ;color:#00004d"><strong>Location</strong></h3> </a><br>
								</div>
							</div>
						</div>

					


						

						

							
					</div>
				</div>
			</div>

@endsection
