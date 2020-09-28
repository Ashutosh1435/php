<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Add book</title>
    <script>
   function validate(){
            var nam = document.getElementById("name");
            var a_name = document.getElementById("a_name");
            var b_descr = document.getElementById("b_desc");
            var files = document.getElementById("file");
            var filePath = files.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
            if(!allowedExtensions.exec(filePath)){
              alert("File extension not allowed !")
              return false;
            }
            // if(!hasExtension('files',['.jpg','.png','.jpeg'])){
            //   alert("Only jpg,jpeg or png allowed.")
            //   return false;
            // }
            if(nam.value == '' || a_name.value== '' || b_descr.value== ''){
                  alert("Blank field not allowed")
                  return false;
            }
             else{
              alert("Form Submitted.")
             return true;
             }
            }
     </script>
     <style type="text/css">
       body{
        overflow-x: hidden;
       }
     </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Book-Zone</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <!-- <div class="form-inline my-2 my-lg-0">
        <a href='addbook.php'><button class="btn btn-outline-danger my-2 my-sm-0">Add Book</button></a>
      </div> -->
    </div>
  </nav>    

    <div class="row my-5 ">
      <!-- m-auto d-block are used to get the content in middle. -->
      <div class="col-sm-6 col-md-6 m-auto d-block ">

           <form  onsubmit="return validate()" action="save.php" method="post" enctype="multipart/form-data">
        <div class="form-group mb-2">
          <label for="name">Book Name</label>
          <input type="text" class="form-control" name="b_name" id="name" placeholder="Enter book name"required>
        </div>
        <div class="form-group mb-2">
          <label for="a_name">Author Name</label>
          <input type="text" class="form-control" name="a_name" id="a_name" placeholder="Enter author name" required>
        </div>
        <div class="form-group mb-2">
          <label for="file">Choose Image</label>
          <input type="file" class="form-control" name="b_image" id="file" required>
        </div>
        <div class="form-group mb-3">
          <label for="b_desc">Book Description</label>
          <textarea class="form-control" name="b_desc" id="b_desc" rows="3" required ></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="mb-2 btn btn-outline-success">
      </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>