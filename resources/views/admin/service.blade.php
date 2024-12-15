<!DOCTYPE html>
<html lang="en">
  <head>
     
     @include('admin.besic');
     <style>
* {
  
  background1-color: black;
}
.div_center
       {
        text-align: left;
        padding-top: 40px;
       }

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px black;
  border-radius: 4px;
  resize: vertical;
  color: black;
}

label {
  padding: 12px 12px 12px 3px;
  display: inline-block;
}

input[type=submit] {
  background-color: green;
  color: white;
  padding: 12px 50px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
font-color{
  color: black;

}

input[type=submit]:hover {
  background-color: green;
}

.container {
  border-radius: 5px;
  background-color: black;
  padding: 5px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  color: black;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
  </head>
  <body>
    <div class="container-scroller">

      @include('admin.sidebar');


      @include('admin.header');

      <div class="main-panel">
          <div class="content-wrapper">
            <div class="div_center">
              @if(session()->has('message'))

              <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
                
              </div>
              @endif

                  <h2>Add Services</h2>
<p></p>

<div class="container">
  <form action="{{url('/add_service')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row">
    <div class="col-25">
      
    </div>
    <div class="col-75 ">
      <input type="text" id="fname" name="service_name" placeholder="Service name.." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      
    </div>
    <div class="col-75">
      <input type="file"  name="image" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      
    </div>
    <div class="col-75">
      <select id="hours" name="hours" required>
        <option  value="30 Mint">30 Mint</option>
        <option value="1 Hour">1 Hour</option>
        <option value="2 Hour">2 Hour</option>
        <option value="3 Hour">3 hour</option>
        <option value="5 Hour">4 Hour</option>
        <option value="5 Hour">5 Hour</option>

      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Service Description.." style="height:200px" required></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>




          </div>
        </div>
            
 
      @include('admin.script');



       </div>
    </body>
</html>

