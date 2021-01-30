<?php
 include 'navbar.php'
?>
  
<div class="container" style="padding-top: 70px;">
  <div class="row">
  	<div class="col-md-7" style="color: white; text-align: center; margin-top: 80px; margin-bottom: 80px; ">
  		<h2><small style="font-size: 15px">Hii, I'm</small> Sandeep Kumar Saw.<h2>
      <h3>Web Developer | Artificial Inteligence & Machine Learning.</h3>
  		<small>I'm a developer who loves building digital products.</small><br><br>
      
      <div class="center" style="width: 100%; font-size: 25px;">
        <div id="social" style="margin: auto;">
          <ul>
            <li class="facebook" onclick="window.location.href='https://www.linkedin.com/in/sandeep-kumar-saw/'">
              <button class="border" ><i class="fab fa-linkedin-in"></i></button>
            </li>

            <li class="twitter" onclick="window.location.href='https://github.com/sandeepkr1084'">
              <button class="border"><i class="fab fa-github"></i></button>
            </li>

            <li class="instagram" onclick="window.location.href='https://twitter.com/Sandeep34619232'">
              <button class="border"><i class="fab fa-twitter"></i></button>
            </li>

            <li class="dribbble"  onclick="window.location.href='https://www.instagram.com/sandeep_kumar_saw_/'">
              <button class="border"><i class="fab fa-instagram"></i></button>
            </li>

          </ul>
        </div>
      </div>


      <p>Daltonganj, Jharkhand - 822123 : +91 9337918561 | sandeepkr1084@gmail.com
    </div>
  	<div class="col-md-4" style="">
  		<img src="src/images/sandeep.jpg" style="height: 90%%; width: 100%;">
  	</div>
  </div>
</div><br><br>

<div class="container" style="color: white;">
  <h1>Education</h1>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <h3>GIET University, Gunupur</h3>
      <p>BACHELOR OF TECHNOLOGY</p>
      <p style="opacity: 0.6">Computer Science Engineering<br><small style="opacity: 0.6">2017 - Present</small></p>
      <p style="opacity: 0.6">CGPA: 8.58 (Till 6th Sem)</p><br>
      <a href="education.php">More details <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</div><br><br>

<div class="container" style="color: white;">
  <h1>Projects</h1><br>
  <div class="row">
    <div class="col-md-4" style="padding: 20px">
      <div class="card" style="background-color: #a8adaa;">
        <div class="card-header" style="height: 32px; padding: 5px;">Online Voting System</div>
        <div class="card-body"><img src="src/projects/online_voting_system.png" width="100%"></div>
        <div class="card-footer" style="padding: 8px; text-align: justify;">
          <p>In this project we have developed a website in which if a person wants to create a small voting campaign,<span id="dotsp1">...</span><span id="project1" style="display: none">he/she can create it by the help of our project. This project will dispute the problems of electing a person having more number of candidates, usually with the help of website the person who have majority of votes will won and will be selected as a leader.</span>
          </p>
          <div style="width: 100%;">
            <span style="">
              <a href="https://github.com/sandeepkr1084/Online-Voting-System"> Visit website </a>
            </span>
            <span style="float: right;">
              <a id="btnp1" onclick="display1()">View more</a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4" style="padding: 20px;">
      <div class="card" style="background-color: #a8adaa;">
        <div class="card-header" style="height: 32px; padding: 5px;">Online Construction Management</div>
        <div class="card-body"><img src="src/projects/construction.png" width="100%"></div>
        <div class="card-footer" style="padding: 8px; text-align: justify;">
          <p>In this Construction Website, we have developed secure, user-friendly Construction Management<span id="dotsp2">...</span><span id="project2" style="display: none">System. This System can take care of each member whether it is an Administrator or Team members. This System will help them to properly manage the projects of the clients, the project’s data help in growth without creating any hassle. This System is completely secure since every user is provided with user ID and Password so there is no chance of any unauthorized access. Online blogs, Registration and services make it easier to use. So, using this system will help in reducing the labor and provide more facility for Client to take the services.</span> </p>
          <div style="width: 100%;">
            <span style="">
              <a href="https://github.com/sandeepkr1084/construction_management"> Visit website </a>
            </span>
            <span style="float: right;">
              <a id="btnp2" onclick="display2()">View more</a>
            </span>
          </div>
        </div>
      </div>
    </div>

  </div><br>
</div><br><br>

<div class="container" style="color: white;">
  <h1>Skills</h1>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <h3>Backend Technologies</h3>
      <ul>
        <li>Nodejs</li>
        <li>PHP</li>
        <li>MySql</li>
        <li>Mongodb</li>
      </ul>
      <h3>Frontend Technologies</h3>
      <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>Angular 2.0+</li>
      </ul><br>

      <a href="skills.php">More details <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<br><br>

<div class="container"  style="color: white;">
  <div class="row">
    <div class="col-12">
      <h2 class="contact-title">Get in Touch</h2>
    </div>
    <div class="col-lg-6">
                    <!-- <form action="mail.php" method="Get"> -->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea id="contact_message" class="form-control w-100" cols="30" rows="9" name="message" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12" style="padding: 0; padding-right: 1px;">
                                <div class="form-group">
                                    <input id="contact_name" class="form-control" type="text" name="name" placeholder="Enter your Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input id="contact_subject" class="form-control" type="text" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>

                        <input type="button" class="btn btn-block btn-success" value="Send" onclick="redirect()">
                        </div>

                    <!-- </form> -->
                </div>
    <div class="col-lg-1">
      
    </div>

    <div class="col-lg-5">
      <div>
        <div class="row">

          <div class="col-md-1" style="font-size: 35px; padding: 8px; padding-top: 20px;">
            <i class="fas fa-house-user"></i>
          </div>
          <div class="col-md-11" style="padding-left: 25px;">
            <h3>Daltonganj, Jharkhand</h3>
            <p>822123</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-1" style="font-size: 35px; padding: 8px; padding-top: 20px;">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <div class="col-md-11" style="padding-left: 25px;">
            <h3>+91 9337918651</h3>
            <p>Mon to Fri 9am to 6pm</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-1" style="font-size: 35px; padding: 8px; padding-top: 20px;">
            <i class="fas fa-envelope-open-text"></i>
          </div>
          <div class="col-md-11" style="padding-left: 25px; padding-top: 10px;">
            <h4>Sandeepkr1084@gmail.com</h4>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>




<br><br><br><br><br><br>
</body>
</html>
