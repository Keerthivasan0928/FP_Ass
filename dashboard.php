<!DOCTYPE html>
<?php
            $connect = mysqli_connect("localhost", "root", "", "user_register"); 
	    $data=file_get_contents('C:\xampp\htdocs\FP\data.json', 'data.json'); 
            $array = json_decode($data, true); 
echo '<h3>Inserted JSON Data</h3><br />';
                echo '
                <table class="table table-bordered">
                <tr>
                    <th width="45%">userId</th>
                    <th width="10%">id</th>
                    <th width="45%">title</th>
		    <th width="45%">body</th>
                </tr>
                ';
                
                echo '</table>';
            foreach($array as $row) {
                $sql= 
                "INSERT INTO json (userId,id,title,body) VALUES
                ('".$row["userId"]."', '".$row["id"]."', 
                '".$row["title"]."', '".$row["body"]."'); ";
		echo '<table border=1>
		<tr>
                    <td>'.$row["userId"].'</td>
                    <td>'.$row["id"].'</td>
                   <td>'.$row["title"].'</td>
		   <td>'.$row["body"].'</td>  
 		</tr></table>';
				
            }
           
                
            
          ?>
<head>
    <style>
        body{
           
            background-image: url('kk.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        h2{
            border-top-width: 2px;
            border-radius: 1px;
            border-color: aqua;
            font-size: 100px;
            font-style: italic;
            color: bisque;
        }
    </style>
</head>
<body>
  <h2 align ="center"> SUCCESS !</h4> 

</body>
