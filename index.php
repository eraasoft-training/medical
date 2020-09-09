<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <title>Medical Services</title>
  </head>
  <body >


    <h1 class="text-center py-3 my-3 ">Reservation Form</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <img src="assets/images/5.png" alt="" style="max-width:100%">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                </div>
                <form class="border p-5 my-3 " style="background-color:#4A5055;" method="POST" action="">
                    <div class="form-group">
                        <label for="name"  class="text-white">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name"  class="text-white">Your Email</label>
                        <input type="text" name="email" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="name"  class="text-white">Your Phone</label>
                        <input type="text" name="phone" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="city"  class="text-white">Your City</label>
                        <select name="city_id" class="form-control" id="city">
                            <option > City one </option>
                            <option > City two </option>
                            <option > City three </option>
                        </select>
                    </div>
                    <div class="form-group"  >
                        <label for="ser"  class="text-white">Choose Service</label>
                        <select name="ser_id" class="form-control" id="ser">
                            <option > Service one </option>
                            <option > Service two </option>
                            <option > Service three </option>
                        </select>
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>

            </div>
            
        </div>
    </div>

  
  
  </body>
</html>