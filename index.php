<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    //echo "Success connecting to the database";

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `portfolio`.`portfolio` (`name`, `address`, `gender`, `phone`, `email`, `message`, `dt`) VALUES ('$name', '$address', '$gender', '$phone', '$email', '$message', current_timestamp());";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css" class="css">
    <script src="jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container_fluid">
        <div class="background">
            <header>
                <div class="container">
                    <img class="logo" src="logo.png" alt="imageError">
					<div class="menu-triger">&#9776;</div>
                    <nav>
                        <ul>
                            <li><a class="active" href="#">Home</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="resume.pdf" target="_blank">Resume</a></li>
                            <li><a href="#">Blogs</a></li>
                        </ul>
                    </nav>
                        <a href="https://www.facebook.com/skyet.pro" target="_blank"><img class="socialmedia" src="facebook.png" alt="imageError"></a>
                        <a href="https://instagram.com/sujoykayet?igshid=YmMyMTA2M2Y=" target="_blank"><img class="socialmedia" src="instagram.png" alt="imageError"></a>
                        <a href="https://www.youtube.com/channel/UC9DjiKONs5c3nigxIEarO3w/videos" target="_blank"><img class="socialmedia" src="youtube.png" alt="imageError"></a>
                        <a href="https://www.linkedin.com/in/sujoy-kayet-62519a250/" target="_blank"><img class="socialmedia" src="linkedin.png" alt="imageError"></a>
                </div>
            </header>
            <div class="container">
                <div class="sec1">
                    <img class="mypic" src="ok.png" alt="imageError">
                    <p class="name">Sujoy Kayet</p>
					<p class="pro">MCA Fresher</p>
                    <div class="carrear_Objective">Carrear Objective</div>
                    <div class="contact">Contact</div>
						<div class="insec1">
							<div class="info1">
								Carrear Objective : To be part of organization and continues endeavor towards giving my best output personally and professionally to the organization. Further advance my career by continuing to learn and sharpen my skills in programming.
							</div>
						</div>
						<div class="insec2">
							<div class="info2">
								email: sujoykayet261898@gmail.com<br>
								Mobile No: 7980873967<br>
								Address: Hindmotor<br>
							</div>
						</div>
                </div>
            </div>
            <div class="container_fluid">
				<div class="container">
					<div class="sec3">
						<h2>My Skills</h2>
                        <div class="skills">
                            <h3>HTML</h3>
                            <div class="progress-bar">
                                <div class="html"><span>80%</span></div>
                            </div>
                            <h3>CSS</h3>
                            <div class="progress-bar">
                                <div class="css"><span>70%</span></div>
                            </div>
                            <h3>JAVASCRIPT</h3>
                            <div class="progress-bar">
                                <div class="javascript"><span>50%</span></div>
                            </div>
                            <h3>REACT</h3>
                            <div class="progress-bar">
                                <div class="react"><span>60%</span></div>
                            </div>
                            <h3>PYTHON3</h3>
                            <div class="progress-bar">
                                <div class="python"><span>50%</span></div>
                            </div>
                            <h3>JAVA</h3>
                            <div class="progress-bar">
                                <div class="java"><span>50%</span></div>
                            </div>
                            <h3>PHP</h3>
                            <div class="progress-bar">
                                <div class="php"><span>50%</span></div>
                            </div>
                            <h3>MYSQL</h3>
                            <div class="progress-bar">
                                <div class="mysql"><span>40%</span></div>
                            </div>
                        </div>
					</div>
				</div>
                <div class="formbg">
                    <div class="container">
                        <h3>Welcome to my website !</h3>
                        <?php
                            if($insert == true){
                                echo "<p class='submitingmsg'>Thanks for submitting !</p>";
                            }
                        ?>
                        <form action="index.php" method="post">
                            <p>Name : <input type="text" name="name" id="name" placeholder="Plese enter your full name here" required></p>
                            <p>Address : <textarea name="address" id="address" rows=7 cols=70></textarea></p>
                            <fieldset>
                                <legend>Gender</legend>
                                <p>Male <input type="radio" name="gender" id="male"></p>
                                <p>Female <input type="radio" name="gender" id="female"></p>
                            </fieldset>
                            <p>Phone No : <input type="text" name="phone" id="phone" placeholder="Plese enter a valid number" required></p>
                            <p>email : <input type="email" name="email" id="email" placeholder="Plese enter a valid email" required></p>
                            <p>Message : <textarea name="message" id="message" placeholder="leave your message here" rows=12 cols=70></textarea></p>
                            <button class="formbtn">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&#169; Sujoy Kayte 2022</p>
    </footer>


    <script>
        $(document).ready(function() {
            $(".carrear_Objective").click(function() {
                $(".info1").slideToggle(); 
            });
        });

        $(document).ready(function() {
            $(".contact").click(function() {
                $(".info2").slideToggle();
            });
        });
		$(document).ready(function() {
			$(".menu-triger").click(function() {
				$("nav").slideToggle();
			});
		});
    </script>


</body>
</html>

