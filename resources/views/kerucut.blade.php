<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Tabung</title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Anton');
      .nav-link {
        color: #FFFFFF;
      }
      .nav-link:hover {
        color: #F0E2C4;
      }
      .navbar-brand {
        font-family: 'Anton', sans-serif;
        color: #E6D82F;
      }
      .navbar-brand:hover {
        color: #E6D82F;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark">
      <a href="/index">Back</a>      
    </nav>
    <form class="container mt-5" method="GET" action="/bangunkerucut">
      <div class="row justify-content-center">
        <div class="col-6">
          <div class="card">
            <div class="card-header font-weight-bold">Hitung Kerucut</div>
            <div class="card-body p-5">
              <div class="form-group row">
                <label for="jari" class="col-12 p-0">Jari-Jari</label>
                <input type="number" name="jari" id="" class="form-control col-12" >
              </div>
              <div class="form-group row">
                <label for="text" class="col-12 p-0">Tinggi</label>
                <input type="number" name="tinggi" id="text" class="form-control col-12">
              </div>
              <div class="form-group row">
                <input type="submit" value="submit" name="submit" id="submit" class="btn btn-info">
              </div>
              <div>
                @if(session('hasil'))
                  <div class="alert alert-info">
                      {{session('hasil')}}
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
  </body>
</html>