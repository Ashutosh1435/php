<?php include 'connection.php';
        # isset($_POST['submit'])
        # Its also used to chk form is submitted by POST method or not.
        if($_SERVER["REQUEST_METHOD"] == "POST") {

    		$book_name=trim($_POST['b_name']);
	        $author_name=trim($_POST['a_name']); 
	        $book_image=$_FILES['b_image'];    
    		$book_desc=trim($_POST['b_desc']); 

	        $filename = $book_image['name'];
	        $fileerror= $book_image['error'];
	        $filetmp = $book_image['tmp_name'];

	        $fileext = explode('.',$filename);
	        $filecheck = strtolower(end($fileext));

	        $fileextstored = array('png','jpeg','jpg');

	        if(in_array($filecheck, $fileextstored))
	         {
        		$destinationfile = 'upload/'.$filename;
	        	move_uploaded_file($filetmp, $destinationfile);

	        	$q = "INSERT INTO `book`(`b_name`, `b_author`, `b_image`, `b_desc`) VALUES (
	        	'$book_name','$author_name','$destinationfile','$book_desc')";
	        	$query = mysqli_query($conn,$q);
			}
    			
    	}
    		header("Location:index.php?a=$book_name");
    	?>