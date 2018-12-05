<?php include("head.php") ?>
    <div class="container mainCont">
      <?php $active = 'about' ?>
      <?php include('nav.php') ?>
      <div class="container-fluid row">
        <div class="col-md-4 profileImage"></div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
          <div class="subTitle">
            <h1>About me</h1>
          </div>
          <div class="aboutMeText">
            <p>So, who am I? The name is Martin Arusalu.</p>
            <p>I've been a professional web developer now for 3 years. During that time I've worked with clients like
              Estonian Ministry of Defence, Tallinn City Council, international construction and agriculture companies, 
              and many more. My job assignments have usually been about designing user interfaces, creating mockups, 
              low- and high-fidelity prototypes, coding the client side of web applications and also help fixing the 
              server-side code. I have experience with Symfony, Laravel, Bootstrap, jQuery, React, AngularJS, NodeJS</p>
            <p>My style is clean optimized code, minimalist interfaces and light animations.</p>
            <span class="contact">
              <h4>Ready to talk?</h4>
              <a href="javascript:goTo('https://ee.linkedin.com/in/martinarusalu', 'new')"><img src="img/linkedin.png" /></a>
              <a href="skype:martin.arusalu?chat&topic=Professional%20Profile"><img src="img/skype.png" /></a>
            </span>
          </div>
        </div>
      </div>
    </div>
<?php include('footer.php') ?>