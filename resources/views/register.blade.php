<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANNISA | REGISTER</title>
    <link rel="stylesheet" href="/css1/bootstrap.min.css">
</head>
<body>
  <div class="container d-flex justify-content-center pt-5 mt-5">
    <div class="card" style="width: 30rem;">
      <div class="card-header text-center">
        REGISTER
      </div>
      <div class="card-body">
        <div class="container">
          <form action="daftar/create" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama lengkap</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Please enter your name"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Please enter your email">
              </div>
             <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
      </div>
    </div>
  </div>
  
 
            
</body>
</html>
