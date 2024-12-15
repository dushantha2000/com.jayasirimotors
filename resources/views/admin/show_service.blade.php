<!DOCTYPE html>
<html lang="en">
  <head>
     
     @include('admin.besic');

     <style type="text/css">
     	
     	.center
     	{
     		margin: auto;
     		width: 50%;
     		border: 2px solid white;
     		text-align: center;
     		margin-top: 40px;
     	}
      .image_size
      {
        width: 100px;
        height: 100px;
        border: 2px solid white;
        display: inline-block;
        padding: 2px;
        
      }
      .th_font
      {
        background: skyblue;
        color:#000000 ;
        
      }
      .th_title_pd
      {
        padding: 30px;
      }
      .th_pd
      {
        padding: 30px;
      }
      .th_color
      {
        color:skyblue;
      }


     </style>

  </head>
  <body>
  	<div class="container-scroller">

  	  @include('admin.sidebar');


  	  @include('admin.header');

  	  <div class="main-panel">
          <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
            @endif


          	<h2>All Serivce</h2>

          	<table class="center">
          		<tr class="th_font">
          			<th class="th_pd"><b>Service Name</b></th>
          			<th class="th_pd"><b>Description</b></th>
          			<th class="th_pd "><b>Image</b></th>
          			<th class="th_pd"><b>hours</b></th>
                <th class="th_pd th_color ">Delete</th>
                <th class="th_pd th_color">Edit</th>
          		</tr>
          		@foreach($services as $service)
          		<tr>
          			<td>{{$service->service_name}}</td>
          			<td>{{$service->description}}</td>
          			<td>
                  <img class="image_size" src="/service/{{$service->image}}"   alt="Service Image">
               

                </td>
          			<td>{{$service->Hours}}</td>


                <td> <a class="btn btn-danger" onclick="return confirm('Are You Sure ?..')" href="{{url('delete_service',$service->id)}}">Delete</a></td>  

                <td><a class="btn btn-success" href="{{url('update_service',$service->id)}}">Edit</a></td>

          		</tr>
          		@endforeach
          	</table>

 
      @include('admin.script');       
    </body>
</html>




