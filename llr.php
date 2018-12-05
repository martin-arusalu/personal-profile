<?php include("head.php") ?>
    <div class="container mainCont llr">
      <?php include('nav.php') ?>
      <div class="container-fluid row">
        <div class="col-md-4 workImage">
          <a href="javascript:goTo('https://www.llr.ee/', 'new')"><img src="img/llr.png" /></a>
        </div>
        <div class="col-md-8">
          <div class="subTitle">
            <h1>LLR</h1>
          </div>
          <div class="workText">
            <h4>UI / UX Design + Full stack coding</h4>
            <h5>Client: AS Spin TEK</h5>
            <p>As a thesis project for my previous school, I had a chance to create a portal for Estonia's nation wide pet 
              registry - LLR. My job was to create a page that is an informative portal for pet owners. Also it had to have 
              a sub-page for animals in shelters. That page had to get data from different information systems and present 
              the data about cats and dogs in shelters.</p>
            <p>When designing and developing the page, I had to follow the accessibility and security standards because 
              it was a national project and included sensitive data. Also like with <a href="haudi.php">Haudi project</a> 
              I had to make the page compatible with old and new browsers.</p>
            <p>The portal uses CMS "Abiks" and is connected to nation wide pet registry, Estonia's Population registry and 
              various animal shelter information systems.</p>
            <p><a href="javascript:goTo('https://www.llr.ee/', 'new')">Link to live page</a></p>
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>