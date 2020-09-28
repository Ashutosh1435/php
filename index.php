<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Book Management</title>
	  <style type="text/css">
	  	.box{
	  		border-radius: 20px;
	  		background-color: #D3D3D3;
	  		margin-top: 30px;
	  		margin-bottom: 20px;
	  	}
	  	body{
        overflow-x: hidden;
      }
      .head{
      	background-color: #D3D3D3; 
      }
      .main{
      	border-radius: 20px;
      }
	  </style>
  </head>
  <body>
    
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Book-Zone</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <div class="form-inline my-2 my-lg-0">
	      <a href='addbook.php'><button class="btn btn-outline-danger my-2 my-sm-0">Add Book</button></a>
	    </div>
	  </div>
	</nav>
	 <div class="row mt-0">
	 	<div style=" background-color: grey; border: 2px solid black;" class="col-sm-12 col-md-12 col-lg-12">
	 		<h2 class="py-2"style="color: white; text-align: center;"><b>Books present in our library</b></h2>
	 	</div>
	 </div>

		<div class="row ">
		<div class="col-sm-10 col-md-10 m-auto d-block ">
		<div class="table-responsive my-5">
			<table class="main table table-light table-striped table-hover">
	  <thead>
	    <tr>
	      <th class="head" scope="col">Book ID</th>
	      <th class="head" scope="col">Book Name</th>
	      <th class="head" scope="col">Author Name</th>
	      <th class="head" scope="col">Book Description</th>
	      <th class="head" scope="col">Picture</th>
	    </tr>
	  </thead>
	  <tbody>
          
		<?php include 'connection.php'; 
			# error_reporting(0); // To stop showing error on web-page
			try{
				# $_SERVER["REQUEST_METHOD"] == "GET"
				if(isset($_GET['a'])) {
					$book_name = $_GET['a'];
						if($book_name){
							echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Success&nbsp:&nbsp</strong> Your book '."<u><b>".$book_name."</b></u>".' added Successfully.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>';
						}		
					}
				}
    		finally{
    			$displayQuery = " select * from book ";
    			$result = mysqli_query($conn,$displayQuery);
    		
    			while($res = mysqli_fetch_array($result)){
	    			?>      
					<tr class="box">
	    				<td><?php echo $res['b_id']; ?></td>
	    				<td><a href="description.php?b_id=<?php echo $res['b_id']; ?>"><?php echo $res['b_name']; ?></a></td>
	    				<td><?php echo $res['b_author']; ?></td>
	    				<td><?php echo $res['b_desc']; ?></td>
	    				<td> <img src="<?php echo $res['b_image']; ?>" height="100px" 
						width="100px"></td>
	    			</tr>
	    			<?php
    				}
    			}
        ?>
  	  </tbody>	
  	</table>
	</div>
   </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>





