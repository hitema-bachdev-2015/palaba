
function KonamiCode(id){
	if(id==1){
		$('body').addClass('turn');
	}
	else if(id == 2){
		HarlemShake();
	}
    else if(id == 3){
        $('body').addClass('hidden');
        $('canvas').css('width','100%');
        $('canvas').css('height','100%');
        var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var fps = document.getElementById('fps');

var W = canvas.width = innerWidth;
var H = canvas.height = innerHeight;

var raf = requestAnimationFrame;
var running = false;

var TAU = Math.PI*2;
'floor|random|round|abs|sqrt|PI|atan2|sin|cos|pow'
  .split('|')
  .forEach(function(p) { this[p] = Math[p]; });

function randint(n) { return floor(n*random()); }
function choose() { return arguments[randint(arguments.length)]; }



var Cos = cos(PI/77);
var Sin = sin(PI/77);

/*---------------------------------------------------------------------------*/

function loop(t) {
  if (running) raf(loop);
  update();
  draw();
}

document.onclick = function() {
  if ((running = !running)) raf(loop);
};

document.onkeydown = function(e) {
  if (e.which !== 27) return;
  running = false;
  setTimeout(reset, 50);
};

/*---------------------------------------------------------------------------*/

function Bot(x, y, vx, vy) {
  this.x0 = this.x = x;
  this.y0 = this.y = y;
  this.vx = vx;
  this.vy = vy;
  this.age = 1;
  this.color = grey(random());
  this.radius = random()*5;
  this.decay = choose(0.99, 0.98, 0.97, 0.96, 0.95);
}

var black = 'rgba(0, 0, 0, 0.1)';
var white = 'rgba(255, 255, 255, 0.1)';

function grey(nn) {
  var n = floor((1-nn) * 255);
  return 'rgba('+n+','+n+','+n+','+0.3+')';
}


Bot.prototype.update = function() {
  this.x += this.vx;
  this.y += this.vy;
  
  var sign = random() > 0.5 ? 1 : -1;
  var vx = this.vx, vy = this.vy;
  var c = Cos, s = sign*Sin;
  this.vx = vx*c - vy*s;
  this.vy = vx*s + vy*c;

  this.radius *= this.decay;
  if (this.radius < 0.3) {
    this.x = this.x0;
    this.y = this.y0;
    this.radius = 3;
    this.color = grey(random());
  }
};

Bot.prototype.draw = function(ctx) {
  ctx.beginPath();
  ctx.arc(this.x, this.y, this.radius, 0, TAU);
  ctx.closePath();
  ctx.fillStyle = this.color;
  ctx.fill();
};

/*---------------------------------------------------------------------------*/

var B = 500;
var bots;

function reset() {
  ctx.clearRect(0, 0, W, H);
  bots = new Array(B);
  for (var i = 0; i < B; i++) {
    var v = random()*4-2;
    var t = random()*TAU;
    bots[i] = new Bot(W/2, H/2, v*cos(t), v*sin(t));
  }
}

function update() {
  for (var i = 0; i < B; i++) bots[i].update();
}

function draw() {
  for (var i = 0; i < B; i++) bots[i].draw(ctx);
}

/*---------------------------------------------------------------------------*/


running = true;
reset();
raf(loop);
/**/

    }
	else
	{
		$('#add-task').hide();
		$('div.add-cat').hide();
			$('#add-task').after('<header id="control"><div class="wrap"><span id="logo"></span><span class="tab active">taches</span><span class="tab">ajouter</span><span class="tab">parametres</span><a href="" class="profil"><span class="img-profil"><img src="img/obama.jpg"></span><span class="name">Barack OBAMA</span></a></div></header><section class="content wrap"><div id="coloumn-left"><div class="filter-date"><h2 class="active"><a href="">Avant la fin du monde</a></h2><h2 class="small"><a href="">Au plus tôt</a></h2><h2 class="small"><a href="">Semaine</a></h2><h2 class="small"><a href="">Ce mois-ci</a></h2><h2 class="small"><a href="">Cette année</a></h2></div><div class="filter-category"><span class="title">Catégorie</span><h2 class="all active"><a href="">Tout</a></h2></div></div><div id="coloumn-right"></div></section>');
		for (var i = 0; i < $('header.titre').length; i++) {
			$('#coloumn-left .filter-category').append('<h2><a href="">'+$('header.titre').eq(i).find('h2').text()+'</a></2>');
		};
		var toto = $('#contener').html();
			$('#contener').remove();
			$('#coloumn-right').html('<div id="contener">'+toto+'</div>');
			$('footer').remove();
	}
}
//Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A  
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],  
n = 0;  
$(document).keydown(function (e) {  
    if (e.keyCode === k[n++]) {  
        if (n === k.length) {  
            KonamiCode(); // à remplacer par votre code  
            return !1  
        }  
    } else k = 0  
});  

$(document).ready(function(){
	$('input[name="content-task"]').keyup(function (e) {  
		if($('input[name="content-task"]').val() == 'faire un tour'){
			KonamiCode(1);
		}
		if($('input[name="content-task"]').val() == 'harlem shake'){
			KonamiCode(2);
		}
        if($('input[name="content-task"]').val() == 'aller à la source'){
            KonamiCode(3);
        }
	});

});

function HarlemShake() {
    function c() {
        var e = document.createElement("link");
        e.setAttribute("type", "text/css");
        e.setAttribute("rel", "stylesheet");
        e.setAttribute("href", f);
        e.setAttribute("class", l);
        document.body.appendChild(e)
    }

    function h() {
        var e = document.getElementsByClassName(l);
        for (var t = 0; t < e.length; t++) {
            document.body.removeChild(e[t])
        }
    }

    function p() {
        var e = document.createElement("div");
        e.setAttribute("class", a);
        document.body.appendChild(e);
        setTimeout(function() {
            document.body.removeChild(e)
        }, 100)
    }

    function d(e) {
        return {
            height: e.offsetHeight,
            width: e.offsetWidth
        }
    }

    function v(i) {
        var s = d(i);
        return s.height > e && s.height < n && s.width > t && s.width <
            r
    }

    function m(e) {
        var t = e;
        var n = 0;
        while (!!t) {
            n += t.offsetTop;
            t = t.offsetParent
        }
        return n
    }

    function g() {
        var e = document.documentElement;
        if (!!window.innerWidth) {
            return window.innerHeight
        } else if (e && !isNaN(e.clientHeight)) {
            return e.clientHeight
        }
        return 0
    }

    function y() {
        if (window.pageYOffset) {
            return window.pageYOffset
        }
        return Math.max(document.documentElement.scrollTop,
            document.body.scrollTop)
    }

    function E(e) {
        var t = m(e);
        return t >= w && t <= b + w
    }

    function S() {
        var e = document.createElement("audio");
        e.setAttribute("class", l);
        e.src = i;
        e.loop = false;
        e.addEventListener("canplay", function() {
            setTimeout(function() {
                x(k)
            }, 500);
            setTimeout(function() {
                N();
                p();
                for (var e = 0; e < O.length; e++) {
                    T(O[e])
                }
            }, 15500)
        }, true);
        e.addEventListener("ended", function() {
            N();
            h()
        }, true);
        e.innerHTML =
            " <p>If you are reading this, it is because your browser does not support the audio element. We recommend that you get a new browser.</p> <p>";
        document.body.appendChild(e);
        e.play()
    }

    function x(e) {
        e.className += " " + s + " " + o
    }

    function T(e) {
        e.className += " " + s + " " + u[Math.floor(Math.random() *
            u.length)]
    }

    function N() {
        var e = document.getElementsByClassName(s);
        var t = new RegExp("\\b" + s + "\\b");
        for (var n = 0; n < e.length;) {
            e[n].className = e[n].className.replace(t, "")
        }
    }
    var e = 30;
    var t = 30;
    var n = 350;
    var r = 350;
    var i =
        "//s3.amazonaws.com/moovweb-marketing/playground/harlem-shake.mp3";
    var s = "mw-harlem_shake_me";
    var o = "im_first";
    var u = ["im_drunk", "im_baked", "im_trippin", "im_blown"];
    var a = "mw-strobe_light";
    var f =
        "//s3.amazonaws.com/moovweb-marketing/playground/harlem-shake-style.css";
    var l = "mw_added_css";
    var b = g();
    var w = y();
    var C = document.getElementsByTagName("*");
    var k = null;
    for (var L = 0; L < C.length; L++) {
        var A = C[L];
        if (v(A)) {
            if (E(A)) {
                k = A;
                break
            }
        }
    }
    if (A === null) {
        console.warn(
            "Could not find a node of the right size. Please try a different page."
        );
        return
    }
    c();
    S();
    var O = [];
    for (var L = 0; L < C.length; L++) {
        var A = C[L];
        if (v(A)) {
            O.push(A)
        }
    }
}
