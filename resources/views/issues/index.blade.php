<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>


  <body>

    <div class="container">
        <div class="row pt-5">
        <h1>Submit your Issue</h1>
        <form method="POST" action="issues/store">
            @csrf

              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text " class="form-control" id="name" aria-describedby="emailHelp" name="name" required value="{{Auth::user()->name}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required value="{{Auth::user()->email}}">
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label">Phone no</label>
                <input type="number" class="form-control" id="phone" aria-describedby="emailHelp" name="phone" required>
              </div>

              <div class="mb-3">
                <label for="building_number" class="form-label">Building no</label>
                <input type="number" class="form-control" id="building_number" aria-describedby="emailHelp" name="building_number" required>
              </div>

              <div class="mb-3">
                <label for="appartment_number" class="form-label">Appartment no</label>
                <input type="number" class="form-control" id="appartment_number" aria-describedby="emailHelp" name="appartment_number" required>
              </div>

              <div class="mb-3">
                <label for="msg" class="form-label">Message</label>
                <input type="text" class="form-control" id="msg" aria-describedby="emailHelp" name="message" required>
              </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Attachment: </label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <div class="row pt-5">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
