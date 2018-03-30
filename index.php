<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EduFarm</title>
<meta name="description" content="EduFarm">
<meta name="author" content="Piyush Bamel, Kaustubh Nagar">
<link rel="stylesheet" href="css/style1.css">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<script>
function change(){
  var c=document.getElementById("pdf");
  var a=document.getElementById("course").value;
  if(a=="1")
  {
    c.innerHTML="<iframe src=\"/pdf/1.pdf\" width=\"100%\" height=\"800px\"> This browser does not support PDFs. Please download the PDF to view it: <a href=\"/pdf/1.pdf\">Download PDF</a> </iframe>";

  }
  if(a=="2")
  {
    c.innerHTML="<iframe src=\"/pdf/2.pdf\" width=\"100%\" height=\"800px\"> This browser does not support PDFs. Please download the PDF to view it: <a href=\"/pdf/2.pdf\">Download PDF</a> </iframe>";
  }
  if(a=="3")
  {
    c.innerHTML="<iframe src=\"/pdf/3.pdf\" width=\"100%\" height=\"800px\"> This browser does not support PDFs. Please download the PDF to view it: <a href=\"/pdf/3.pdf\">Download PDF</a> </iframe>";

  }
  if(a=="4")
  {
    c.innerHTML="<iframe src=\"/pdf/4.pdf\" width=\"100%\" height=\"800px\"> This browser does not support PDFs. Please download the PDF to view it: <a href=\"/pdf/4.pdf\">Download PDF</a> </iframe>";

  }
  if(a=="5")
  {
    c.innerHTML="<iframe src=\"/pdf/5.pdf\" width=\"100%\" height=\"800px\"> This browser does not support PDFs. Please download the PDF to view it: <a href=\"/pdf/5.pdf\">Download PDF</a> </iframe>";

  }
  if(a=="6")
  {
    c.innerHTML="<iframe src=\"/pdf/6.pdf\" width=\"100%\" height=\"800px\"> This browser does not support PDFs. Please download the PDF to view it: <a href=\"/pdf/6.pdf\">Download PDF</a> </iframe>";

  }

}

function call()
{
  var soil=document.getElementById("soil").value;
  var temperature=document.getElementById("temperature").value;
  var rainfall=document.getElementById("rainfall").value;
  if(soil==""||soil==undefined||temperature==""||temperature==undefined||rainfall==""||rainfall==undefined){
    alert("Enter in all fields");
  }
  else{
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange= function(){
    if(this.readyState == 4 && this.status == 200){
      document.getElementById("response").innerHTML = this.responseText;

    }
  };
  xmlhttp.open("GET","query.php?soil="+soil+"&rainfall="+rainfall+"&temperature="+temperature,true);
  xmlhttp.send();

}
}

function call1()
{
var email= document.getElementById("email").value;
var query= document.getElementById("topic").value;
var des = document.getElementById("des").value;
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
if(email!=""||email!=undefined)
{
if(re.test(email))
{
  if(query!=""&&query!=undefined&&query!="Enter topic of your query")
  {
    if(des!=""&&des!=undefined&&des!="Describe your query")
    {
      var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange= function(){
    if(this.readyState == 4 && this.status == 200){
      document.getElementById("response1").innerHTML = this.responseText;

    }
  };
  xmlhttp.open("GET","query1.php?query="+query+"&email="+email+"&des="+des,true);
  xmlhttp.send();
    }
    else {
      alert("Please enter your query description");
    }
  }
  else {
    alert("Please enter your query topic");
  }
}
else {
  alert("Enter valid email");
}

}
else {

  alert("Enter your email");
}
}

</script>

<!-- Stylesheet
    ================================================== -->
    <style>
  input[type=number], select ,input[type=text],textarea{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
  }

  button{
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  button:hover {
      background-color: #45a049;
  }
  form{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt="">Edufarm</div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href="#page-top"> <i class="fa fa-paper-plane-o"></i> EduFarm</a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll" href="#about">About</a> </li>
        <li> <a class="page-scroll" href="#services">Our Goals</a> </li>
        <li> <a class="page-scroll" href="#works">Courses</a> </li>
        <li> <a class="page-scroll" href="#team">Crop Predict</a> </li>
        <li> <a class="page-scroll" href="#testimonials">Future</a> </li>
        <li> <a class="page-scroll" href="#faq">FAQ</a> </li>
        <li> <a class="page-scroll" href="#query">Support Ticket</a> </li>
      <li> <a class="page-scroll" href="#contact">Contact</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>

<!-- Header -->
<div id="intro">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <a href="#about" class="btn btn-default page-scroll" style="margin-top: 35%; margin-left: 0%;">EXPLORE</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About EduFarm</h2>
      <hr>
    </div>
    <div class="row">
        <div class="col-md-6"><img src="img/about.jpg" class="img-responsive"></div>
      <div class="col-md-6">
        <div class="about-text">
          <p style="font-size: 150%; text-align: justify;">We will educate farmers and other agricultural students the best crop that can be grown in a certain climatic region with factors like amount of rainfall, type of soil, temperature and many more playing a major role in the result. It also has course material to educate farmers in smarter farming techniques using modern technology and also gives agricultural students access to course material posted by different universities that offer agriculture related courses. The farmers are notified about the disasters and solutions they can take in order to minimise the damage caused. It also informs the local agriculture officers in the region so that the farmers that do not have the access may be notified by the authorities and preventive measures can be taken in time.
</p>
        </div>
      </div>
      </div>
    </div>
  </div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Our Goals</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-4 col-sm-8">
        <div class="service"> <img src="img/oral.png" />
          <h3>Increase crop production</h3>
        </div>
      </div>
        <div class="col-md-4 col-sm-8">
        <div class="service"> <img src="img/creative1.png" />
          <h3>Innovate</h3>
        </div>
      </div>
        <div class="col-md-4 col-sm-8">
        <div class="service"> <img src="img/quiz.png" />
          <h3>Support</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-8">
        <div class="service"> <img src="img/devil.png" />
          <h3>Lead</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-8">
        <div class="service"> <img src="img/buzz.png" />
          <h3>Fast responses</h3>
        </div>
      </div>
      <div class="col-md-4 col-sm-8">
        <div class="service"><img src="img/model.png" />
          <h3>Architect</h3>
        </div>
      </div>

    </div>
  </div>
</div>

<div id="works">
  <div class="container">
    <div class="section-title text-center center">
      <h2>COURSES</h2>
      <hr>
    </div>
    <div class="container">

      <script src="js/index.js"></script>


      <label for="soil">Select Course</label>
      <select id="course" name="course" onchange="change()">
        <option value="1">Farmer Book</option>
        <option value="2">Agriculture India</option>
        <option value="3">Irrigation Principles</option>
        <option value="4">State of India Agriculture</option>
        <option value="5">Agriculture Rural Developement</option>
        <option value="6">Tamil Nadu Agriculture Report</option>
      </select>
      <div id="pdf">
      <iframe src="/pdf/1.pdf" width="100%" height="800px">
      This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/1.pdf">Download PDF</a>
      </iframe>
    </div>

        </div>
</div>
    </div>

<div id="team" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Predict Best Suitable Crop</h2>
      <hr>
          <div id="form1">
            <form action="/action_page.php">
        <label for="temp">Average Temperature (C)</label>
        <input type="number" id="temperature" name="temp" placeholder="Type Average Temperature" min="0" max="55">

        <label for="rain">Average Rainfall</label>
        <input type="number" id="rainfall" name="rain" placeholder="Type Average Rainfall " min="0" max="400">

        <label for="soil">Soil Type</label>
        <select id="soil" name="soil">
          <option value="8">Red Soil</option>
          <option value="3">Loamy Soil</option>
        </select>

        <button type="button" id="button1" onclick="call()">Find</button>
      </form>
      </div>
      <a class="weatherwidget-io" href="https://forecast7.com/en/13d0880d27/chennai/" data-label_1="CHENNAI" data-label_2="WEATHER" data-theme="original" >CHENNAI WEATHER</a>
      <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
      </script>
      <div id="response"></div>
    </div>
  </div>
</div>


<!---------------------------------------------------------------------->


<!-- Video Section -->
<div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2 style="color: black;">FUTURE OF FARMING</h2>
      <hr>
    </div>
      <div class="embed-responsive embed-responsive-16by9">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/WhOrIUlrnPo" class="embed-responsive-item" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
  </div>
</div>


<!---------------------------------------------------------------------->
<div id="faq">
  <div class="container">
    <div class="section-title text-center center">
      <h2>FAQ</h2>
      <hr>
    </div>
    <div class="container">
          <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">How can I connect to an operator?</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true" style="padding-left: 1.5%;"><br />
                  <b>In contact section, there is a 24X7 toll free number (+91 9992014705) which you can call if you are in need of immediate assistance.</b><br><br>
              </dd>
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  How do you predict best crop for land ?</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true" style="padding-left: 1.5%;"><br>
                <b>We have a predefined datasets on which we use multinomial regression to predict best possible crop according to the data provided by you.</b><br><br>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  How can I ask a query?
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true" style="padding-left: 1.5%;"><br>
                  <b>There is a query button of your window. Click on it and enter information related to your query and we will assign you an expert as soon as possible.</b><br><br>
              </dd>
              <dt>
                <a href="#accordion4" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger">
                  How can I support your bussiness?
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true" style="padding-left: 1.5%;"><br>
                <b>Mail us to piyushbamel1@gmail.com or kaustubhnagar98@gmail.com with your proposal and contact information. If we find it worthy we will contact you.</b><br><br>
              </dd>
              <dt>

          </div>
        </div>
        <script src="js/index.js"></script>
</div>
    </div>
    <br><br><br><br><br><br><br><br>


<div id="query" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Submit your Support Ticket</h2>
          <hr>
              <div id="form1">
                <form action="/action_page.php">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email">

            <label for="topic">Topic</label>
            <input type="text" id="topic" name="topic" placeholder="Enter topic of your query ">

            <label for="des">Description</label>
            <textarea name="des" id="des" rows="8" placeholder="Describe your query"></textarea>
            <button id="sub" name="sub" onclick="call1()">Submit</button>
          </form>
              </div>
              <div id="response1"></div>
      </div>
    </div>
  </div>


<div id="floating-button" style="position: fixed; bottom: 10%; left: 82%; z-index: 10;">
        <a href="https://www.bighaat.com/" target="_blank"><img id="floating-button-image" src="img/market.png" width="60%" height="60%%" onmouseover="hover(this);" onmouseout="unhover(this);" /></a>
    </div>

    <script>
        function hover(element) {
    element.setAttribute('width','65%');
    element.setAttribute('height','65%');
}
function unhover(element) {
    element.setAttribute('width','60%');
    element.setAttribute('height','60%');
}
    </script>



<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact us</h2>
      <hr>
        <p><b>Customer Service:</b></p><br><pre>+91 9992014705 (Toll Free)</pre>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
          <p title="View Google Map"><a href="https://www.google.co.in/maps/place/VIT+Chennai/@12.840641,80.1512396,17z/data=!3m1!4b1!4m5!3m4!1s0x3a5259af8e491f67:0x944b42131b757d2d!8m2!3d12.840641!4d80.1534283?hl=en" target="_blank">Vellore Institute of Technology,<br />
              Vandalur - Kelambakkam Road, Chennai<br />Tamil Nadu - 600127</a></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"><i class="fa fa-envelope-o fa-2x"></i>
          <p><a href="mailto:piyushbamel1@gmail.com">piyushbamel1@gmail.com</a></p>
          <p><a href="mailto:nagarkaustubh98@gmail.com">nagarkaustubh98@gmail.com</a></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
          <p>Piyush Bamel<br />
            9992014705</p>
        <p>Kaustubh Nagar<br />
            9079374877</p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">

      <div class="social">
        <h3>Follow us</h3>
        <ul>
          <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p>Copyright &copy; Edufarm</p>
      <p>Designed by &nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.facebook.com/piyush.bamel.14" target="_blank">Piyush Bamel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/kaustubh.nagar.3" target="_blank">Kaustubh Nagar</a></p>
      <p>Powered by : HCI Project</p>
  </div>
  <p>Calamity Widget source https://www.willyweather.com/ny/new-york-county/new-york.html</p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
<script src="https://cdnres.willyweather.com/widget/warning/loadView.html?id=85283" type="application/javascript"></script>
</body>
</html>
