    <div class="container-fluid header row">
        <div class="logo col-md-6 col-xs-12">
          <a id="indexLink" class="<?= (isset($active) && $active == 'index') ? 'active':''; ?>" href="javascript:goTo('index.php')">Martin Arusalu</a>
        </div>
        <div class="links col-md-6 col-xs-12">
          <a id="worksLink" class="<?= (isset($active) && $active == 'works') ? 'active':''; ?>" href="javascript:goTo('works.php')">Works</a>
          <a id="aboutLink" class="<?= (isset($active) && $active == 'about') ? 'active':''; ?>" href="javascript:goTo('about.php')">About</a>
          <a id="cvLink" href="Martin_Arusalu_cv.pdf" target="_blank">CV</a>
        </div>
      </div>