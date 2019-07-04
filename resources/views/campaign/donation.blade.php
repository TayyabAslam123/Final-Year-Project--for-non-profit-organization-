
        @extends('layout.umm')

        @section('content')
        <div class="container">     
          <div class="row">
            <div class="col-sm-6 bg-success">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="col-sm-6">
                    <form action="{{ action('donate@donation') }}" method="get">
                        
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" name="pwd">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

            </div>
          </div>
        </div>
  
      @endsection