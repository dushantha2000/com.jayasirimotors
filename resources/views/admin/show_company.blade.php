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


          	<h2>All Companies</h2>

          	<table class="center">
          		<tr class="th_font">
          			<th class="th_pd"><b>Company Name</b></th>
          			<th class="th_pd"><b>Email</b></th>
          			<th class="th_pd "><b>Phone Number</b></th>
          			<th class="th_pd"><b>Address</b></th>
                <th class="th_pd th_color ">Delete</th>
                
          		</tr>
          		@foreach($companies as $company)
          		<tr>
          			<td>{{$company->company_name}}</td>
          			<td>{{$company->company_email}}</td>
          			<td>{{$company->company_phone}}</td>
          			<td>{{$company->company_address}}</td>


                
                
          		</tr>
          		@endforeach
          	</table>

 
      @include('admin.script');       
    </body>
</html>




