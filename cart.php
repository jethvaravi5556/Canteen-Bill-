<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            margin: 0;
            padding0; 
            box-sizing: border-box;
            font-family: Century Gothic;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url('images/c1.jpg');
            height: 100vh;
            background-size: cover;
            padding: 0px 10px;
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            padding: 1%;
            margin: 0 auto;
            width: 80%;
        }

        .text-center {
            text-align: center;
        }

        ul {
            float: right;
            list-style-type: none;
            margin-top: 25px;

        }

        ul li {
            display: inline-block;
        }

        ul li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }

        ul li a:hover {
            background-color: #fff;
            color: #000;
        }

        ul li.active a {
            background-color: #fff;
            color: #000;
        }

        .logo img {
            float: left;
            width: 200px;
            height: auto;
        }

        .main {
            max-width: 1200px;
            margin: auto;
        }

        h2 {
            color: #fff;
            font-size: 30px;
            margin-top: 7%;
        }

        table {
            color: white;
            text-align: center;
            border: 2px solid black;
            margin: 30px auto;
            padding: 20px;
            font-size: 20px;
            box-shadow: 0px 50px 50px 5px rgba(0, 0, 0, 0.7);
        }

        th {
            color: #f7ff00;
        }

        .admin {
            background-color: green;
            color: white;
            outline: none;
            border: 0;
            border-radius: 3px;
            height: 25px;
            width: 15%;
            font-weight;
            bold;
            cursor: pointer;

        }

        .order {
            background-color: #14A44D;
            color: white;
            outline: none;
            border: 0;
            border-radius: 3px;
            height: 35px;
            width: 15%;
            font-size: 20px;
            cursor: pointer;
            background-color: green;
        }

        #myUL {
            list-style-type: none;
            padding: 2%;
            margin: 1%;
            width: 65%;
        }

        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }

        .container {
            border: 2px solid black;
            width: 500px;
            max-width: 500px;
            margin: 80px auto;
            padding: 5px;
            box-shadow: 0px 50px 50px 5px rgba(0, 0, 0, 0.7);
        }

        .container .btn {
            width: 40%;
            padding: 6px 10px;
            font-size: 15px;
            font-weight: bold;
            background: #000;
            border: 1px solid white;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
        }

        .container .btn:hover {
            background-color: #fff;
            color: #000;
        }

        .btn {
            width: 30%;
            padding: 6px 10px;
            font-size: 15px;
            font-weight: bold;
            background: #000;
            border: 1px solid white;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
        }

        .btn:hover {
            background-color: #fff;
            color: #000;
        }

        .total{
            margin-left:80%;
            padding-top: 0px; 
            /* height: 30px;
            width: 15%; */
        }
        .danger{
            color: red;
            font-size: 27px;
            background-color: white;
            width: 30%;
            padding: 5px;
            margin-top: 10%;
            border-radius: 25px;
            border-color: red;
            
        }
        .delete{
			background-color:red;
			color:white;
            font-size: 20px;
			outline:none;
			border:0;
            margin-left: 20%;
			border-radius:3px;
			/* height:22px; */
			width:60%;
			font-weight: bold;
			cursor:pointer;
		}

        .dropbtn {
	text-decoration: none;
	/* color: #fff; */
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #fff;
	color: #000;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #fff;
	color: #000;}
    </style>
</head>

<body>
    <div class="main">
        <div class="wrapper">
            <div class="logo">
                <img src="images/logo1.png">
            </div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li ><a href="item.php">items</a></li>
                <li><a href="order.php">Orders</a></li>
                <!-- <li class="active"><a href="insertcart.php">cart</a></li> -->
                <li><a href="about.php">About</a></li>
                <div class="dropdown">
						<button class="dropbtn">LOGIN</button>
						<div class="dropdown-content">
                            <a href="alogin.php">As admin</a>
                            <a href="login.php">As customer</a>
						</div>
				</div>
                <li class="active"> <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="50%" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 15 16">
 		 <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</svg></a></li>
            </ul>
        </div>
    </div>

   
<?php
    $cid=$_SESSION['cid'];
    $totalprice = $_POST['totalprice'];
        //print_r($_POST);
    $con=mysqli_connect("localhost","root");
    $db=mysqli_select_db($con,"food");
    $query = "select*from cart where cid='$cid'";
    $cmd=mysqli_query($con,$query) or die (mysqli_error($con));
    $total=mysqli_num_rows($cmd);


if (!empty($total))
{  ?>
        <h2 align="center"> Cart<h2>

            <form method="POST" action="order.php">
                <center>
                    <table border="1" cellspacing="7" width="100%">
                      <tr>
                            <th>item id</th>
                            <th>item name</th>
                            <th>MRP</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            
                      </tr>
                      <?php
                        
                        
                            while ($row = mysqli_fetch_array($cmd)) 
                            {
                                echo "<tr>
                                <td>" . $row['iid'] . "</td>
                                <td>" . $row['item_name'] . "</td>
                                <td>" . $row['mrp'] . "</td>
                                <td>" . $row['qty'] . "</td>
                                <td>" . $row['price'] . "</td>
                                <td>                             
                                        <input type='submit' name='remove' value='remove' class='delete'>
                                        <input type='hidden' name='item_id' value=" .$row['iid']. ">
                                        
                                    </td>
                                    
                                    <input type='hidden' name='item_name[]' value=" .$row['item_name']. ">
                                    <input type='hidden' name='mrp[]' value=" .$row['mrp']. ">
                                    <input type='hidden' name='qty[]' value=" .$row['qty']. ">
                                    <input type='hidden' name='price[]' value=" .$row['price']. ">
                                </tr> ";
                                $totalprice += $row['price'] ;
                            }

                            // <input type='hidden' name='item_id[]' value=" .$item_name. ">
                            // order.php?item_id=<?php echo $iid? >
                                
                            ?> 
                    
                            </table>
                            <div class="total"> total : <?php echo $totalprice ;?></div>
                            <input type='submit' name='order' value='order' class='order'>
                    </form>
                        </center><?php
} 
            else
            {   ?>
                <h2 align="center"> Cart<h2>
                        <center>
                                                            
                                <div class="danger">Oops there is no selected item.</div>

                        </center>
                        <?php
            }
            
            ?>
             
                
                
</body>

</html>