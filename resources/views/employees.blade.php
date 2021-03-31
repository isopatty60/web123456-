<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
                <h1>เพิ่มรูปภาพ</h1>
            <form action="{{ route('addimage')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email ID">
                </div>

                <div class="form-group">
                    <label>Post</label>
                    <input type="text" name="post" class="form-control" placeholder="Enter Post">
                </div>

                <div class="input-group my-4">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input-primary">
                        <label class="custom-file-input">Choose file</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
                <a href="/invoie" class="btn btn-success">กลับ</a>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
