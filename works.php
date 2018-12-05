<?php include("head.php") ?>
    <div class="container mainCont">
      <?php $active = 'works' ?>
      <?php include('nav.php') ?>
      <div class="container-fluid row">
        <div class="subTitle text-center col-md-12">
          <h2>These are some of my recent works</h2>
          <p>Click on a shape to see more about the project</p>
        </div>
      </div>
      <div class="container-fluid row">
        <div class="worksContainer col-md-12">
          <svg class="worksSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 731 416">
            <defs>
              <pattern id="hypoxiImg" patternUnits="userSpaceOnUse" width="1000" height="1000">
                <image xlink:href="img/hypoxi.jpg" x="0" y="70" width="300" height="300" />
              </pattern>
            </defs>
            <defs>
              <pattern id="haudiImg" patternUnits="userSpaceOnUse" width="1000" height="1000">
                <image xlink:href="img/haudi.jpg" x="90" y="60" width="300" height="300" />
              </pattern>
            </defs>
            <defs>
              <pattern id="llrImg" patternUnits="userSpaceOnUse" width="1000" height="1000">
                <image xlink:href="img/llr.jpg" x="150" y="50" width="300" height="300" />
              </pattern>
            </defs>
            <defs>
              <pattern id="loengusImg" patternUnits="userSpaceOnUse" width="1000" height="1000">
                <image xlink:href="img/loengus.jpg" x="300" y="80" width="300" height="300" />
              </pattern>
            </defs>
            <defs>
              <pattern id="fairtradeImg" patternUnits="userSpaceOnUse" width="1000" height="1000">
                <image xlink:href="img/fairtrade.jpg" x="350" y="200" width="300" height="300" />
              </pattern>
            </defs>
            <path id="hypoxiPath" d="M232.5 317.5h-144v-221z" fill="url(#hypoxiImg)" class="st0"/>
            <path id="haudiPath" d="M98.5 86.5l144 221 144-221z" fill="url(#haudiImg)" class="st0"/>
            <path id="llrPath" d="M252.5 317.5h144v-221z" fill="url(#llrImg)" class="st0"/>
            <path id="loengusPath" d="M409.5 248.5v-162L571 248z" fill="url(#loengusImg)" class="st0"/>
            <path id="fairtradePath" d="M409.5 258.5h161l58 58h-219z" fill="url(#fairtradeImg)" class="st0"/>
            <rect id="hypoxiTextOverlay" class="overlay" x="105" y="280" width="92" height="30" fill="rgba(25, 33, 38, 0.7)" />
            <text id="hypoxiText" transform="translate(113.416 300.25)" class="st1 st2 st3">
              HYPOXI
            </text>
            <rect id="haudiTextOverlay" class="overlay" x="205" y="100" width="77" height="30" fill="rgba(25, 33, 38, 0.7)" />
            <text id="haudiText" transform="translate(211.583 120.208)" class="st1 st2 st3">
              HAUDI
            </text>
            <rect id="llrTextOverlay" class="overlay" x="320" y="280" width="50" height="30" fill="rgba(25, 33, 38, 0.7)" />
            <text id="llrText" transform="translate(324.54 300.21)" class="st1 st2 st3">
              LLR
            </text>
            <rect id="fairtradeTextOverlay" class="overlay" x="412" y="280" width="120" height="30" fill="rgba(25, 33, 38, 0.7)" />
            <text id="fairtradeText" transform="translate(417 300.25)" class="st1 st2 st3">
              FAIRTRADE
            </text>
            <rect id="loengusTextOverlay" class="overlay" x="412" y="195" width="103" height="50" fill="rgba(25, 33, 38, 0.7)" />
            <text id="loengusText" transform="translate(417 215.167)" class="st1">
              <tspan x="0" y="0" class="st1 st2 st3">LOENGUS </tspan><tspan x="0" y="19.2" class="st1 st2 st3">NÄEME</tspan>
            </text>
          </svg>
          <svg class="worksSvg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 270">
            <defs>
              <pattern id="hypoxiImg2" patternUnits="userSpaceOnUse" width="100" height="50">
                <image xlink:href="img/hypoxi.jpg" x="0" y="0" width="100" height="100" />
              </pattern>
            </defs>
            <defs>
              <pattern id="haudiImg2" patternUnits="userSpaceOnUse" width="100" height="50">
                <image xlink:href="img/haudi.jpg" x="0" y="0" width="100" height="100" />
              </pattern>
            </defs>
            <defs>
              <pattern id="llrImg2" patternUnits="userSpaceOnUse" width="100" height="50">
                <image xlink:href="img/llr.jpg" x="0" y="0" width="100" height="100" />
              </pattern>
            </defs>
            <defs>
              <pattern id="loengusImg2" patternUnits="userSpaceOnUse" width="100" height="50">
                <image xlink:href="img/loengus.jpg" x="0" y="0" width="100" height="100" />
              </pattern>
            </defs>
            <defs>
              <pattern id="fairtradeImg2" patternUnits="userSpaceOnUse" width="100" height="50">
                <image xlink:href="img/fairtrade.jpg" x="0" y="0" width="100" height="100" />
              </pattern>
            </defs>
            <rect id="hypoxiRect"  x="0" y="0" width="100" height="50" fill="url(#hypoxiImg2)" />
            <rect id="haudiRect"  x="0" y="55" width="100" height="50" fill="url(#haudiImg2)" />
            <rect id="llrRect"  x="0" y="110" width="100" height="50" fill="url(#llrImg2)" />
            <rect id="loengusRect"  x="0" y="165" width="100" height="50" fill="url(#loengusImg2)" />
            <rect id="fairtradeRect"  x="0" y="220" width="100" height="50" fill="url(#fairtradeImg2)" />
          </svg>
        </div>
      </div>
    </div>
    <?php include('footer.php') ?>