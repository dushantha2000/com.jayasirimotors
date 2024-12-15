<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>service</span>
               </h2>
            </div>
            <div class="row">

               @foreach($services as $service)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('service_details',$service->id)}}" class="option2">
                           Service Details
                           </a>
                           <a href="{{url('service_details',$service->id)}}" class="option1">
                           Book Online
                           </a>
                        </div>
                     </div>


                     <div class="img-box">
                        <img src="service/{{$service->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$service->service_name}}
                        </h5>
                        <h6 style="color:red;">
                           {{$service->Hours}}
                        </h6>
                        
                     </div>
                  </div>
               </div>

               @endforeach
            </div>
         </div>
      </section>

               