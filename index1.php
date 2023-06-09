<!DOCTYPE html>
<html lang="en">

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #007bff;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: darkblue;
  text-decoration: none;
}

.mine{
    display: flex;
    justify-content: center;
}
</style>

<head>
    <meta charset="utf-8">
    <title>Porfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
<center>
    <!-- Navbar Start -->
    <nav class="">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="" id="navbarCollapse">
            <div class="mine">
                <ul style="display: flex;">
                  <li><a class="active" href="#home">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#skill">Skills</a></li>
                  <li><a href="#qualification">Expertise</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

 

    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container" style="margin-top: 67px; margin-bottom: 120px;">
            <div class="row align-items-center">
               
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Hello, I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 4px #ffffff;">Pranath P</h1>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="Resume.pdf" target="blank" class="btn btn-white mr-4">Download CV</a>
                    </div>
                </div>
                <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/profile5.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="position-absolute text-uppercase text-primary" style="margin-top:10px">About Me</h1>
    </div>
    <div class="container-fluid py-5" id="about">
        <div class="container" style="margin-top: 120px; margin-bottom: 120px;">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="img/about1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Information Science Student.</h3>
                    <p style="margin-bottom: 70px;">I am Pranath P, a highly motivated and detail-oriented B-Tech student studying Information Science Engineering. Possessing a strong work ethic and a positive attitude, I approach challenges with enthusiasm and a desire to learn. My adaptability and eagerness to take on new tasks make me a valuable asset to any team. I am committed to achieving success and am eager to bring my skills and dedication to a new role. With a keen eye for detail and a drive for excellence, I am confident in my ability to make a meaningful contribution to any organization.</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">Pranath P</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">30 September 2002</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">B-Tech</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary"><a href="tel:+919035237647">+91 9035237647</a></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"><a href="mailto:pranath012@gmail.com">pranath012@gmail.com</a></span></h6></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <!-- Skill Start -->
    <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="position-absolute text-uppercase text-primary" style="margin-top: 60px">My Skills</h1>
    </div>
    <div class="container-fluid py-5" id="skill">
        <div class="container" style="margin-top: 120px; margin-bottom: 120px;">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="w3-light-gray progress">
                          <div class="w3-green" style="height:24px;width:90%"></div>
                        </div><br>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">88%</h6>
                        </div>
                        <div class="w3-light-gray progress">
                          <div class="w3-yellow" style="height:24px;width:88%"></div>
                        </div><br>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="w3-light-gray progress">
                          <div class="w3-green" style="height:24px;width:90%"></div>
                        </div><br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Java</h6>
                            <h6 class="font-weight-bold">98%</h6>
                        </div>
                        <div class="w3-light-gray progress">
                          <div class="w3-green" style="height:24px;width:98%"></div>
                        </div><br>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">SQL</h6>
                            <h6 class="font-weight-bold">60%</h6>
                        </div>
                        <div class="w3-light-gray progress">
                          <div class="w3-yellow" style="height:24px;width:60%"></div>
                        </div><br>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Python</h6>
                            <h6 class="font-weight-bold">40%</h6>
                        </div>
                        <div class="w3-light-gray progress">
                          <div class="w3-red" style="height:24px;width:40%"></div>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->




    <!-- Qualification Start -->
    <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="position-absolute text-uppercase text-primary" style="margin-top: 73px;">Education & Expericence</h1>
    </div>
    <div class="container-fluid py-5" id="qualification">
        <div class="container" style="margin-top: 120px">
            <div class="row align-items-start" style="text-align: start;">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Information Science</h5>
                            <p class="mb-2"><strong>RNS Institute Of Technology</strong> | <small>2020 - 2024</small></p>
                            <p>As a 22-year-old student in my 6th semester of Information Science, I have always harbored a profound fascination for software development. Even from a young age, I was enamored by the possibilities that programming and development presented, and my passion for this field has only intensified over time. I am proud to have already completed a handful of impressive projects, which underscore my mastery of languages such as PHP, HTML, CSS, Bootstrap, and Java. With unflagging devotion and an insatiable thirst for knowledge, I remain committed to pursuing excellence in the realm of software engineering and making indelible contributions to the field.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Senior Secondary (XII), Science</h5>
                            <p class="mb-2"><strong>Sri Chaitanya PU College</strong> | <small>2018 - 2020</small></p>
                            <p>As an avid learner, I had the privilege of completing my first and second PU at the esteemed Sri Chaitanya College, nestled in the vibrant heart of Rajajinagar, Bangalore. These formative years bolstered my resolve to pursue academic excellence.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Secondary (X)</h5>
                            <p class="mb-2"><strong>Vidyashree High School</strong> | <small>2007 - 2017</small></p>
                            <p>Studied here for 11 years.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Projects</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Placement DBMS</h5>
                            <p class="mb-2"><strong>Personal</strong> | <small> Excellent</small></p>
                            <p>The webpage is built using PHP for server-side scripting, HTML and CSS for front-end development, and Bootstrap for styling and responsiveness. The webpage serves as a platform for viewers to access placement details of a college, making the information easily accessible and organized. The development of the webpage demonstrates proficiency in PHP, HTML, CSS, and Bootstrap</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Tic Tac DS</h5>
                            <p class="mb-2"><strong>Project</strong> | <small> Good</small></p>
                            <p>"Tic Tac DS" is a Tic Tac Toe game that utilizes data structures for intelligent gameplay. Advanced algorithms adjust strategies in response to player moves, resulting in a challenging and rewarding experience. With arrays or linked lists used to store game information, players can explore the power of data structures in a classic game.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">DevPort</h5>
                            <p class="mb-2"><strong>Personal</strong> | <small> Excellent</small></p>
                            <p>"DevPort" showcases web development skills with PHP mailer, PHP, HTML, Bootstrap, CSS, and JS. Seamless communication and feedback through PHP mailer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="qualification">
        <div class="container" style="margin-top: 0">
            <div class="row align-items-start" style="text-align: start;">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Information Science</h5>
                            <p class="mb-2"><strong>RNS Institute Of Technology</strong> | <small>2020 - 2024</small></p>
                            <p>As a 22-year-old student in my 6th semester of Information Science, I have always harbored a profound fascination for software development. Even from a young age, I was enamored by the possibilities that programming and development presented, and my passion for this field has only intensified over time. I am proud to have already completed a handful of impressive projects, which underscore my mastery of languages such as PHP, HTML, CSS, Bootstrap, and Java. With unflagging devotion and an insatiable thirst for knowledge, I remain committed to pursuing excellence in the realm of software engineering and making indelible contributions to the field.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Senior Secondary (XII), Science</h5>
                            <p class="mb-2"><strong>Sri Chaitanya PU College</strong> | <small>2018 - 2020</small></p>
                            <p>As an avid learner, I had the privilege of completing my first and second PU at the esteemed Sri Chaitanya College, nestled in the vibrant heart of Rajajinagar, Bangalore. These formative years bolstered my resolve to pursue academic excellence.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Secondary (X)</h5>
                            <p class="mb-2"><strong>Vidyashree High School</strong> | <small>2007 - 2017</small></p>
                            <p>Studied here for 11 years.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Projects</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Placement DBMS</h5>
                            <p class="mb-2"><strong>Personal</strong> | <small> Excellent</small></p>
                            <p>The webpage is built using PHP for server-side scripting, HTML and CSS for front-end development, and Bootstrap for styling and responsiveness. The webpage serves as a platform for viewers to access placement details of a college, making the information easily accessible and organized. The development of the webpage demonstrates proficiency in PHP, HTML, CSS, and Bootstrap</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Tic Tac DS</h5>
                            <p class="mb-2"><strong>Project</strong> | <small> Good</small></p>
                            <p>"Tic Tac DS" is a Tic Tac Toe game that utilizes data structures for intelligent gameplay. Advanced algorithms adjust strategies in response to player moves, resulting in a challenging and rewarding experience. With arrays or linked lists used to store game information, players can explore the power of data structures in a classic game.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">DevPort</h5>
                            <p class="mb-2"><strong>Personal</strong> | <small> Excellent</small></p>
                            <p>"DevPort" showcases web development skills with PHP mailer, PHP, HTML, Bootstrap, CSS, and JS. Seamless communication and feedback through PHP mailer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Contact Start -->
    <center>
    <form id="myForm">
        <div class="position-relative d-flex align-items-center justify-content-center"> 
                <h1 class="position-absolute text-uppercase text-primary" style="margin-top: 300px;">Contact Me</h1>
        </div>
    <div class="container-fluid py-5" id="contact">
        <div class="container" style="margin-top: 200px; margin-bottom: 0; padding-bottom: 0;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="body" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <h4 class="sent-notification"></h4>
                            <div>
                                <button type="button" class="btn btn-primary btn-lg" onclick="sendEmail()">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    </center>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                },
                success: function (response) {
                    $('.sent-notification').text("Message Sent Successfully.");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    $('.sent-notification').text("Error: Something went wrong.");
                }
            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else {
            caller.css('border', '');
            return true;
        }
    }
</script>


    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-1 px-sm-1 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a target="blank" class="btn btn-light btn-social mr-2" href="https://twitter.com/Pranathprasad?t=n0NMS-2gTRM-orGLZXvP0g&s=09"><i class="fab fa-twitter"></i></a>
                <a target="blank" class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/pranath-p-97424726b"><i class="fab fa-linkedin-in"></i></a>
                <a target="blank" class="btn btn-light btn-social" href="https://instagram.com/pranath.p?igshid=ZGUzMzM3NWJiOQ=="><i class="fab fa-instagram"></i></a>
            </div>
    
            <p class="m-0">&copy; All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="#">Pranath P</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->
</body>

</html>