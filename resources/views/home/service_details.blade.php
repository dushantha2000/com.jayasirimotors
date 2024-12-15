<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">

      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>jayasiri motors</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style type="text/css">

.my-btn-class-49 {
display: inline-block; background-color: transparent; font-family: sans-serif; font-size: 1rem; font-weight: 600; color: rgb(0, 0, 0); text-transform: uppercase; letter-spacing: 1px; height: 50px; line-height: 50px; margin-right: 25px; padding: 0px 50px; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0) rgb(0, 230, 246) rgb(0, 0, 0) rgb(0, 0, 0); border-image: initial; position: relative; transition: all 0.2s ease-in-out 0s; cursor: pointer;
}

.my-btn-class-49::before {
content: ""; position: absolute; inset: 0px; width: 100%; height: 100%; background-color: rgb(255, 255, 255); z-index: -1;
}

.my-btn-class-49::after {
content: ""; position: absolute; top: 0px; right: -1px; width: 1px; height: 50px; background-color: rgb(0, 230, 246); transform: rotate(-90deg); transform-origin: center center; z-index: 0; transition: width 0.3s ease-in-out 0s, transform 0.2s ease-in-out 0.3s, z-index 0.15s ease-in-out 0s;
}

.my-btn-class-49:hover {
color: rgb(255, 255, 255); transition: all 0.25s ease-in-out 0s; border: none;
}

.my-btn-class-49:hover::after {
z-index: -1; transform: rotate(0deg); width: 100%; transition: transform 0.2s ease-in-out 0s, width 0.3s ease-in-out 0.2s;
}





      </style>

      






      
   </head>

               <!-- header section strats -->
               @include('home.header');
               <!-- end header section -->

               <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width: 50%; padding: 30px;">
                  
                     <div style="text-align: center;">
                     <img src="service/{{$services->image}}" alt="" style="display: block; margin:  auto; width: 500px; height: 300px;">
                      </div>

                    <div class="detail-box">
                        <h5>
                           {{$services->service_name}}
                        </h5>
                        <h6 style="color:red;">
                           <b>{{$services->Hours}}</b>
                        </h6>
                        <h6 style="color:black;">
                        	Service Descriptin :</h6>
                        	<h6 style="color:blue;">
                           {{$services->description}}
                        </h6>
                        <br>


                 <form action="{{url('appointment_dts',$services->id)}}"  method="POST">
                 	@csrf

                <label for="datetime">Select Date and Time:</label>
                          
                <br>
                <input type="date" id="date" name="date" min="2023-12-17">

                    <select id="select-time" name="select-time">
                    <option value="08:00">8:00 AM</option>
                    <option value="12:00">12:00 PM</option>
                    <option value="15:00">3:00 PM</option>
                    </select>
                    <br> <br> <br>

                    <a href="#"><button class="my-btn-class-49">Submit</button></a>


                    </form>

                     </div>

                 
                 



