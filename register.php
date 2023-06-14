

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

   


    <script type="text/javascript">
       
  
    
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "web_design" :
            document.getElementById("status").options[0]=new Option("Select Course","");
            document.getElementById("status").options[1]=new Option("Python for everybody","Python for everybody");
            document.getElementById("status").options[2]=new Option("Coding for Beginners ","Coding for Beginners");
            document.getElementById("status").options[3]=new Option("Introduction to Programming with Java","Introduction to Programming with Java");
            document.getElementById("status").options[4]=new Option("Crash Course On Python","Crash Course On Python");
            document.getElementById("status").options[5]=new Option("Google IT Automation with Python","Google IT Automation with Python");
            document.getElementById("status").options[6]=new Option("Computer Science:Programming with a Purpose","Computer Science:Programming with a Purpose");
            document.getElementById("status").options[7]=new Option("Mata Front-End Developer","Mata Front-End Developer");
            document.getElementById("status").options[8]=new Option("Coding for everyone and C++","Coding for everyone and C++");
            break;
        case "graphics_design" :
            document.getElementById("status").options[0]=new Option("Select status","");
            document.getElementById("status").options[1]=new Option("Graphics Design","Graphics Design");
            document.getElementById("status").options[2]=new Option("Graphics Design Elements for Non-Designers","Graphics Design Elements for Non-Designers");
            document.getElementById("status").options[3]=new Option("Fundamentals of Graphics Design","Fundamentals of Graphics Design");
            document.getElementById("status").options[4]=new Option("Graphics Design:Pop your Linkedin with 3D effects using canva","Graphics Design:Pop your Linkedin with 3D effects using canva");
            document.getElementById("status").options[5]=new Option("Launch Your Online Business","Launch Your Online Business");
            document.getElementById("status").options[6]=new Option("Graphics Design","Graphics Design");
            document.getElementById("status").options[7]=new Option("How to Create Video for Online Courses","How to Create Video for Online Courses");
            document.getElementById("status").options[8]=new Option("Graphics Design in ADo Illustrator:Creating a Logo","Graphics Design in ADo Illustrator:Creating a Logo");
            document.getElementById("status").options[9]=new Option("Ideas from the Histroy of Graphics Design","Ideas from the Histroy of Graphics Design");
            document.getElementById("status").options[10]=new Option("Graphics Design:Make Interior's Project Mood Boards in Gimp","Graphics Design:Make Interior's Project Mood Boards in Gimp");
            document.getElementById("status").options[11]=new Option("Building Digital Media using Graphics Design in PowerPoint","Building Digital Media using Graphics Design in PowerPoint");
            document.getElementById("status").options[12]=new Option("Build a mobile app with Google on Glide no coding","Build a mobile app with Google on Glide no coding");
            break;

        case "video_editing" :
        document.getElementById("status").options[0]=new Option("Select status","");
            document.getElementById("status").options[1]=new Option("Create a Promotional Video using canva","Create a Promotional Video using canva");
            document.getElementById("status").options[2]=new Option("How to create Video for online Courses","How to create Video for online Courses");
            document.getElementById("status").options[3]=new Option("The art of Visual Stroytelling","The art of Visual Stroytelling");
            document.getElementById("status").options[4]=new Option("Mastering Final Cut Pro","Mastering Final Cut Pro");
            document.getElementById("status").options[5]=new Option("Using video in social Media Posts with canva","Using video in social Media Posts with canva");
            document.getElementById("status").options[6]=new Option("Bring Your story in Life-Video Post-Production","Bring Your story in Life-Video Post-Production");
            document.getElementById("status").options[7]=new Option("Fundamentals of Digital Image and Video","Fundamentals of Digital Image and Video");
            document.getElementById("status").options[8]=new Option("Create websites videos with canva","Create websites videos with canva");
            document.getElementById("status").options[9]=new Option("Writing in English at University","Writing in English at University");
            document.getElementById("status").options[10]=new Option("Fundaments of Video Editing","Fundaments of Video Editing");
            document.getElementById("status").options[11]=new Option("Social Psychology","Social Psychology");
            document.getElementById("status").options[12]=new Option("Edit your photos fro social media Marketing using PicsArt","Edit your photos fro social media Marketing using PicsArt");
            
            break;

        case "online_marketing" :
        document.getElementById("status").options[0]=new Option("Select status","");
            document.getElementById("status").options[1]=new Option("Foundations of Digital Marketing and E-Commerce","Foundations of Digital Marketing and E-Commerce");
            document.getElementById("status").options[2]=new Option("Meta Social Media Marketing","Meta Social Media Marketing");
            document.getElementById("status").options[3]=new Option("Digital Marketing","Digital Marketing");
            document.getElementById("status").options[4]=new Option("Meta Marketing Analytics","Meta Marketing Analytics");
            document.getElementById("status").options[5]=new Option("Social Media Marketing","Social Media Marketing");
            document.getElementById("status").options[6]=new Option("Marketing in Digital World","Marketing in Digital World");
            document.getElementById("status").options[7]=new Option("Introduction to marketing ","Introduction to marketing ");
            document.getElementById("status").options[8]=new Option("Marketing Analytics Foundation","Marketing Analytics Foundation");
            document.getElementById("status").options[9]=new Option("Introduction to the Digital Advertising Landscape ","Introduction to the Digital Advertising Landscape ");
            document.getElementById("status").options[10]=new Option("Search Advertising","Search Advertising");
            document.getElementById("status").options[11]=new Option("Social Psycology","Social Psycology");
            document.getElementById("status").options[12]=new Option("How to Update Social Media Marketing","How to Update Social Media Marketing");
            break;
       
                              
        }
        return true;
    }
    </script>
    
   
<style>
    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
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
    background-color: #f9f9f9;
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
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
  </style>
  
</head>

<body>

  
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                       
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link active">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Regiter Course</h1>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Contact Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Course Registration Form</h6>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row g-4">
                
               
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-left: 33%;">
                    <form >
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fname" placeholder="Your First Name" required>
                                    <label for="name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lname" placeholder="Your Last Name">
                                    <label for="name">Last Name</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="contact" placeholder="Your Contact Number">
                                    <label for="contact">Your Contact Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address" placeholder="Your Address">
                                    <label for="address">Your Address</label>
                                </div>
                            </div>
                           
                           
                        
                                <div class="category_div" id="category_div" >Domain:
                                    <select id="source" name="source" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                                    <option value="">Select Domain</option>
                                    <option value="web_design">Web Design</option>
                                    <option value="graphics_design">Graphics Design</option>
                                    <option value="online_marketing">Online Marketing </option>
                                    <option value="video_editing">Video Editing</option>
                                    </select>
                                    <script>selectElement = document.querySelector('#sourse');
                                    $val1=selectElement.value;</script>
                                    
                                    
                                </div>
                                <div class="sub_category_div" id="sub_category_div" >Courses:
                                    <script type="text/javascript" language="JavaScript">
                                    document.write('<select name="status" id="status"><option value="">Select Courses</option></select>')
                                    </script>
                                    <noscript>
                                    <select id="status" name="status">
                                        <option value="open">OPEN</option>
                                        <option value="delivered">DELIVERED</option>
                                    </select>
                                    </noscript>
                                    <script>selectElement1 = document.querySelector('#status');
                                    $val2=selectElement.value;
                                    </script>
                                </div>
                            
                                <!-- <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" name="profile_img" accept="image/png, image/jpeg" placeholder="Choose a profile picture:">
                                        <label for="file">Choose a profile picture:</label>
                                    </div>
                                </div> -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" id ="submit_course" name="submit_course" onclick="demo()">Register</button>
                               <script>
                                function demo()
                                {
                                    alert("Registration Successfull!");
                                }
                               </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="#">Home</a>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="admin.html">Admin</a>
                    <a class="btn btn-link" href="courses.html">Courses</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Elearning.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Don't miss out our latest offers! </p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                       
                        <a href="signup.html" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"> Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Elearning</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Mayuri Hiremath</a><br><br>
                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

