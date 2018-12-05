window.onunload = function () { };
$(document).ready(function () {
  if ($('#indexLink').hasClass('active')) {
    var s = Snap('.vectorSvg');
    var rect1 = s.select('#rect1');
    var rect2 = s.select('#rect2');
    var worksText = s.select('#worksText');
    var aboutText = s.select('#aboutText');
    rect1.node.addEventListener('click', function () { goTo("works.php"); });
    worksText.node.addEventListener('click', function () { goTo("works.php"); });
    rect2.node.addEventListener('click', function () { goTo("about.php"); });
    aboutText.node.addEventListener('click', function () { goTo("about.php"); });
    changeBackground();
    setInterval(changeBackground, 2000);
    loadIndex();
  } else if ($('#worksLink').hasClass('active')) {
    var s = Snap('.worksSvg');
    var s2 = Snap('.worksSvg2');
    var works =
      [
        {name: 'hypoxi', e:s.select('#hypoxiPath'), t:s.select('#hypoxiText'), b:s2.select('#hypoxiRect')},
        {name: 'haudi', e:s.select('#haudiPath'), t:s.select('#haudiText'), b:s2.select('#haudiRect')},
        {name: 'llr', e:s.select('#llrPath'), t:s.select('#llrText'), b:s2.select('#llrRect')},
        {name: 'loengus', e:s.select('#loengusPath'), t:s.select('#loengusText'), b:s2.select('#loengusRect')},
        {name: 'fairtrade', e:s.select('#fairtradePath'), t:s.select('#fairtradeText'), b:s2.select('#fairtradeRect')}
      ];
    $.each(works, function (i, w) {
      w.e.node.addEventListener('mouseover', function () {
        s.node.appendChild(w.e.node);
        s.node.appendChild(w.t.node);
        w.e.animate({ transform: 'scale(1.2,1.2,1)' }, 500, mina.easeout);
        w.e.node.classList.add('big');
      });
      w.e.node.addEventListener('mouseout', function () {
        w.e.animate({ transform: 'scale(1,1,1)' }, 500, mina.easeout);
        w.e.node.classList.remove('big');
      });
      w.e.node.addEventListener('click', function () { goTo(w.name + ".php"); });
      w.b.node.addEventListener('click', function () { goTo(w.name + ".php"); });
      w.t.node.addEventListener('mouseover', function () {
        if (!w.e.node.classList.contains('big')) {
          s.node.appendChild(w.e.node);
          s.node.appendChild(w.t.node);
          w.e.animate({ transform: 'scale(1.2,1.2,1)' }, 500, mina.easeout);
          w.e.node.classList.add('big');
        }
      });
    });
    changeBackground();
    setInterval(changeBackground, 2000);
    loadWorks(works);
  } else if ($('#aboutLink').hasClass('active')) {
    changeBackground();
    setInterval(changeBackground, 2000);
    setInterval(roundedCorners, 5000);
    loadAbout();
  } else if ($('.mainCont').hasClass('hypoxi')) {
    changeBackground(347, 360, 70, 30);
    setInterval(function () { changeBackground(347, 360, 70, 30) }, 2000);
    loadWork();
  } else if ($('.mainCont').hasClass('haudi')) {
    changeBackground(180, 250, 40, 10);
    setInterval(function () { changeBackground(180, 250, 30, 5) }, 2000);
    loadWork();
  } else if ($('.mainCont').hasClass('llr')) {
    changeBackground(100, 160, 40, 50);
    setInterval(function () { changeBackground(100, 160, 50, 30) }, 2000);
    loadWork();
  } else if ($('.mainCont').hasClass('loengus')) {
    changeBackground(212, 256, 30, 40);
    setInterval(function () { changeBackground(200, 240, 30, 40) }, 2000);
    loadWork();
  } else if ($('.mainCont').hasClass('fairtrade')) {
    changeBackground(11, 28, 5, 5);
    setInterval(function () { changeBackground(11, 28, 5, 5) }, 2000);
    loadWork();
  }
});

function goTo(url, target) {
  if (target == "new") {
    window.open(url, '_blank');
  } else {
    var divs = document.querySelectorAll('.mainCont .row div');
    var divCount = 0;
    $.each(divs, function () { divCount++ });
    $.each(document.querySelectorAll('.mainCont .row div'), function (i, e) {
      setTimeout(function () {
        $(e).css('opacity', 0);
      }, i*(1000 / divCount));
    });
    setTimeout(function () {
      $('.mainCont').addClass('toLeft');
    }, 1500);
    setTimeout(function () {
      window.location = url;
    }, 2500);
  }
}

function changeBackground(hStart, hEnd, s, l) {
  if (hStart == null) hStart = 120;
  if (hEnd == null) hEnd = 270;
  if (s == null) s = 20;
  if (l == null) l = 40;
  var hue = Math.floor(Math.random() * (hEnd - hStart)) + hStart;
  $('.mainCont').css('background-color', 'hsl('+hue+', '+s+'%, '+l+'%)');
}

function roundedCorners() {
  $('.profileImage').animate({
    borderTopLeftRadius: Math.floor(Math.random() * 50) + 50 + "%",
    borderBottomLeftRadius: Math.floor(Math.random() * 50) + 50 + "%",
    borderBottomRightRadius: Math.floor(Math.random() * 50) + 50 + "%",
  }, 5000, 'swing');
}

function loadIndex() {
  $('.mainCont').addClass('loaded');
  setTimeout(function () {
    $('.header').css('opacity', 1);
  }, 800);
  setTimeout(function () {
    $('.title h1').css('opacity', 1);
  }, 1300);
  setTimeout(function () {
    $('.title .underText').css('opacity', 1);
  }, 2500);
  setTimeout(function () {
    $('.location').addClass('noPadding');
    $('.title .location').css('opacity', 1);
  }, 2800);
  setTimeout(function () {
    $('.vectorSvg').addClass('loaded');
    $('.vector').addClass('loaded');
  }, 2000);
}

function loadWorks(works) {
  $('.mainCont').addClass('loaded');
  setTimeout(function () {
    $('.header').css('opacity', 1);
  }, 800);
  setTimeout(function () {
    $('.subTitle').css('opacity', 1);
  }, 1300);
  $.each(works, function (i, w) {
    setTimeout(function () {
      $('#' + w.e.node.id).css('opacity', 1);
      $('#' + w.b.node.id).css('opacity', 1);
    }, 1500 + (i * 100));
  });
}

function loadAbout() {
  $('.mainCont').addClass('loaded');
  setTimeout(function () {
    $('.header').css('opacity', 1);
  }, 800);
  setTimeout(function () {
    $('.profileImage').css('opacity', 1);
  }, 1200);
  setTimeout(function () {
    $('.subTitle').css('opacity', 1);
  }, 1500);
  setTimeout(function () {
    $('.aboutMeText').css('opacity', 1);
  }, 1800);
}

function loadWork() {
  $('.mainCont').addClass('loaded');
  setTimeout(function () {
    $('.header').css('opacity', 1);
  }, 800);
  setTimeout(function () {
    $('.workImage img').css('opacity', 1);
  }, 1200);
  setTimeout(function () {
    $('.subTitle').css('opacity', 1);
  }, 1500);
  setTimeout(function () {
    $('.workText').css('opacity', 1);
  }, 1800);
}