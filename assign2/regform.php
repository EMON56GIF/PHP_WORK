<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration Form</title>
  </head>
  <body>
    
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          
          <h2 class="mb-4 text-center">Registration Form</h2>
          
          <form method="post" action="connect.php">

            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter full name">
            </div>
            
           
            <div class="form-group">
              <label class="d-block">Gender</label>
              
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="others">
                <label class="form-check-label" for="inlineRadio3">Others</label>
              </div>
            </div>
              
            
            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" id="dob" name="dob" class="form-control">
            </div>
            
           
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
            </div>

            
            <div class="form-group">
              <label for="mobile">Mobile No</label>
              <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Enter mobile number">
            </div>

           
            <button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </body>
</html>
