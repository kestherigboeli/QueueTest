  <!DOCTYPE html>
  <html lang="{{ config('app.locale') }}">
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>Firmstep Developer Test</title>
          <link rel="stylesheet" href="{{ url('css/style.css') }}">
          <!-- Fonts -->
          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
          <!-- Styles -->

          <script src='{{ url("js/jquery-3.1.1.min.js") }}'></script>
       <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
       <script src='{{ url("js/main.js") }}'></script>
      </head>
      <body>
      <h1 id="queue" style="text-align: center;">Queue App</h1>
  <div class="container">
          <div class="row">
          
              <div class="col-md-6">
              
                  <div class="panel panel-login">
                      <div class="panel-body">
                          <div class="row">

                              <div class="col-lg-12">
                              <div class="wrapper">
                              <h1 id="header1" >New Customer</h1> 
                              @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif 
                              <p id="registerstatus"></p>                         
                                  <form class="active" id="register-form" action="{{url('/save')}}" method="post" role="form">
                                  {{ csrf_field() }}

                                  <div id="myselect" class="mySelect">
                                   <div class="form-group">
                                   <h2>Services</h2>
                                       @foreach ($service as $s)
                                <input type="radio" name="service_id" checked value="{{$s->id}}">{{$s->name}}</br>
                                            @endforeach                                                                                  
                                      </div>
                                      </div> 
                                      <div class="myCustomer">                                     
                                      <div id="myselect">
                                  <div class="form-group">                                  
                                          <select id="purpose" onchange="myFunction()" class="form-control" name="type" >
                                          <option value=""> Select Type </option>
                                           <option value="1">Citizen</option>
                                           <option value="2">Organization</option>  
                                           <option value="0">Anonymous</option >
                                          </select>
                                      </div>
                                      </div>
                                   
                                     

                                   <div class="myTitle">

                                   <div class="form-group">                                  
                                          <select class="form-control" name="title">
                                          <option value=""> Select your title </option>
                                           <option value="Mr">Mr</option>
                                           <option value="Mrs">Mrs</option> 
                                           <option value="Miss">Miss</option>                  
                                           </select>
                                      </div>
                                      </div>
                                      </div>

                                      <div class="myFirstName" >
                                      <div class="form-group">
                                          <input type="text" id="myText" name="firstname" tabindex="1" class="form-control" placeholder="First Name" value="{!! old('firstname') !!}">
                                      </div>
                                      </div>

                                      <div class="myLastName">
                                      <div class="form-group">
                                          <input type="text" name="lastname"  tabindex="1" class="form-control" placeholder="Last Name" value="{!! old('lastname') !!}">
                                      </div> 
                                      </div> 

                                      <div class="myLogin">                                                                    
                                      <div class="form-group">
                                          <div class="row">
                                              <div class="col-sm-6 col-sm-offset-3">
                                                  <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Submit">
                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                  </form>
                           
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
              </div>
              <br>
              <div class="col-md-6">
              <div class="wrapper">
           <h1 id="header1">Queue</h1><br>
           <p id="paragraph">List of customers being queued</p>
           <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Type</th>
          <th>Name</th>
          <th>Service</th>
          <th>Queued At</th>
          
        </tr>
      </thead>
      <tbody>
      @foreach ($customers as $customer)
        <tr>
          <td>{{$customer->id}}</td>

          <td>
               @if($customer->type==1)<span class="badge badge-success">Citizen</span> @endif 
               @if($customer->type==2)<span class="badge badge-success">Organization</span>  @endif 
               @if($customer->type==0)<span class="badge badge-success">Anonymous</span>  @endif 
          </td>
          <td>
          @if($customer->type==0 || $customer->type==2 ) 
          {{$customer->firstname}}

                @else

             {{$customer->title}} {{$customer->firstname}} {{$customer->lastname}}
           @endif 
           </td>
          <td>{{$customer->service->name}}</td>
        
          <td>{{$customer->created_at->toTimeString()}} </td>
         
        </tr>
        @endforeach
      </tbody>
    </table>
           </div>
          </div>
          </div>
      </div>
  </div>

  </body>
       
  </html>
