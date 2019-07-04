@extends('layout.umm')

@section('content')
    



<section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 >Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p style="color:orange;"><span>Address:</span> JOHAR TOWN ,LAHORE</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">0423-5310365</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">goodwill@gmail.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website</span> <a href="#">GOODWILL.COM</a></p>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-12 pr-md-5">
                <h4 class="mb-4">Do you have any questions?</h4>
                {!! Form::open(['action' => 'MsgController@store','method'=>'post']) !!}

                
                <div class="form-group">
                        <label for="exampleInputEmail1">NAME</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                      </div>
                      
                      <div class="form-group">
                            <label for="exampleInputEmail1">EMAIL</label>
                            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
                          </div>


                          <div class="form-group">
                                <label for="exampleInputEmail1">SUBJECT</label>
                                <input type="text" class="form-control" name="subject" aria-describedby="emailHelp" placeholder="Enter Subject">
                              </div>
                          
                              <div class="form-group">
                                    <label for="exampleInputEmail1">MESSAGE</label>
                                    <textarea class="form-control" rows="3" name="msg"  placeholder="Enter Message"></textarea>
                                   
                                  </div>
    


                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
            
              
  {!! Form::close() !!}
            
            </div>
  
            
          </div>
        </div>
      </section>
  
      @endsection