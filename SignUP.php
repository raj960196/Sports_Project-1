<html>
    <?php
    $conn = mysqli_connect("localhost","root","","singup");
    ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>SignUP</title>
    <link rel="Stylesheet" href="SignUP.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</head>

<body>
<form action="#" method="POST">
    <div class="box">
        <div class="left">
            <div class="overlay">
                <h1>Sports Management</h1>
                <p>Welcome to the my website.</p>
            </div>
        </div>
        <div class="right">
            <h5>SIGNUP</h5>
            
            <div class="inputs">
                <input type="text" name="first_name" placeholder="First Name">
                <br>
                <input type="text"  name="last_name"placeholder="Last Name">
                <br>
                <input type="email" name="email" placeholder="E-mail">
                <br>
                <input type="password" name="password" placeholder="Password">
                <br>
                <input type="password" placeholder="Confirm Password">
                <br>
            </div>
            <br>
            <br>
            <div class="remember-me--forget-password">
                <label>
                    <input type="checkbox" name="item" checked>
                    <span class="text-checkbox">Remember Me</span>
                </label>
            </div>
            <br>
            <div class="button">
                <input type = "submit" name = "button" value = "signup"/>
                <a href="index.html"><button>Home</button></a>
            </div>
        </div>
    </div>
</form>
</body>

    <?php
    if(isset($_POST["button"])){
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
 
        $que="insert into sports_information values('','$first_name','$last_name','$email','$password')";
        $result=mysqli_query($conn,$que);
        if($result){
            echo "data inserted successfully";
           
        } else{
            echo "please try again...";
        }
    }
   

    ?>
</html>
