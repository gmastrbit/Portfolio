function getRandom(min, max) {
    return Math.random() * (max - min) + min;
}
var isSafari=/constructor/i.test(window.HTMLElement);
var isFF=!!navigator.userAgent.match(/firefox/i);
if (isSafari) {
    document.getElementsByTagName('html')[0].classList.add('safari');
}
Array.prototype.slice.call(document.querySelectorAll('.button'), 0).forEach(function(bt) {
    bt.addEventListener('click', function(e) {
        e.preventDefault();
    }
    );
}
);
initBt1();
initBt2();
initBt3();
initBt4();
initBt5();
initBt6();
initBt7();
initBt8();
initBt9();
initBt10();

function initBt1() {
    var bt1=document.querySelectorAll('#component-1')[0];
    var bt1c=document.querySelector('.button__container');
    var $circlesTopLeft=bt1.querySelectorAll('.circle.top-left');
    var $circlesBottomRight=bt1.querySelectorAll('.circle.bottom-right');
    var filter=document.querySelectorAll('#filter-goo-1 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt2() {
    var bt1=document.querySelectorAll('#component-2')[0];
    var bt1c=document.querySelector('.button__container2');
    var $circlesTopLeft=bt1.querySelectorAll('.circle2.top-left2');
    var $circlesBottomRight=bt1.querySelectorAll('.circle2.bottom-right2');
    var filter=document.querySelectorAll('#filter-goo-2 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg2'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg2'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt3() {
    var bt1=document.querySelectorAll('#component-3')[0];
    var bt1c=document.querySelector('.button__container3');
    var $circlesTopLeft=bt1.querySelectorAll('.circle3.top-left3');
    var $circlesBottomRight=bt1.querySelectorAll('.circle3.bottom-right3');
    var filter=document.querySelectorAll('#filter-goo-3 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg3'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg3'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt4() {
    var bt1=document.querySelectorAll('#component-4')[0];
    var bt1c=document.querySelector('.button__container4');
    var $circlesTopLeft=bt1.querySelectorAll('.circle4.top-left4');
    var $circlesBottomRight=bt1.querySelectorAll('.circle4.bottom-right4');
    var filter=document.querySelectorAll('#filter-goo-4 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg4'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg4'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt5() {
    var bt1=document.querySelectorAll('#component-5')[0];
    var bt1c=document.querySelector('.button__container5');
    var $circlesTopLeft=bt1.querySelectorAll('.circle5.top-left5');
    var $circlesBottomRight=bt1.querySelectorAll('.circle5.bottom-right5');
    var filter=document.querySelectorAll('#filter-goo-5 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg5'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg5'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt6() {
    var bt1=document.querySelectorAll('#component-6')[0];
    var bt1c=document.querySelector('.button__container6');
    var $circlesTopLeft=bt1.querySelectorAll('.circle6.top-left6');
    var $circlesBottomRight=bt1.querySelectorAll('.circle6.bottom-right6');
    var filter=document.querySelectorAll('#filter-goo-6 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg6'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg6'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt7() {
    var bt1=document.querySelectorAll('#component-7')[0];
    var bt1c=document.querySelector('.button__container7');
    var $circlesTopLeft=bt1.querySelectorAll('.circle7.top-left7');
    var $circlesBottomRight=bt1.querySelectorAll('.circle7.bottom-right7');
    var filter=document.querySelectorAll('#filter-goo-7 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg7'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg7'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt8() {
    var bt1=document.querySelectorAll('#component-8')[0];
    var bt1c=document.querySelector('.button__container8');
    var $circlesTopLeft=bt1.querySelectorAll('.circle8.top-left8');
    var $circlesBottomRight=bt1.querySelectorAll('.circle8.bottom-right8');
    var filter=document.querySelectorAll('#filter-goo-8 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg8'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg8'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt9() {
    var bt1=document.querySelectorAll('#component-9')[0];
    var bt1c=document.querySelector('.button__container9');
    var $circlesTopLeft=bt1.querySelectorAll('.circle9.top-left9');
    var $circlesBottomRight=bt1.querySelectorAll('.circle9.bottom-right9');
    var filter=document.querySelectorAll('#filter-goo-9 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg9'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg9'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}

function initBt10() {
    var bt1=document.querySelectorAll('.component-10')[0];
    var bt1c=document.querySelector('.button__container10');
    var $circlesTopLeft=bt1.querySelectorAll('.circle10.top-left10');
    var $circlesBottomRight=bt1.querySelectorAll('.circle10.bottom-right10');
    var filter=document.querySelectorAll('#filter-goo-10 feGaussianBlur')[0];
    var tl=new TimelineLite();
    var tl2=new TimelineLite();
    var btTl=new TimelineLite( {
        paused: true, onUpdate: function() {
            filter.setAttribute('x', 0);
        }
        , onComplete: function() {
            bt1c.style.filter='none';
        }
    }
    );
    tl.to($circlesTopLeft, 1.2, {
        x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl.to($circlesTopLeft[0], 0.1, {
        scale: 0.2, x: '+=6', y: '-=2'
    }
    );
    tl.to($circlesTopLeft[1], 0.1, {
        scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[2], 0.1, {
        scale: 0.2, x: '-=15', y: '+=6'
    }
    , '-=0.1');
    tl.to($circlesTopLeft[0], 1, {
        scale: 0, x: '-=5', y: '-=15', opacity: 0
    }
    );
    tl.to($circlesTopLeft[1], 1, {
        scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0
    }
    , '-=1');
    tl.to($circlesTopLeft[2], 1, {
        scale: 0, x: '-=15', y: '+=5', opacity: 0
    }
    , '-=1');
    var tlBt1=new TimelineLite();
    var tlBt2=new TimelineLite();
    tlBt1.set($circlesTopLeft, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt1.add(tl);
    tl2.to($circlesBottomRight, 1.2, {
        x: 25, y: 25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)
    }
    );
    tl2.to($circlesBottomRight[0], 0.1, {
        scale: 0.2, x: '-=6', y: '+=3'
    }
    );
    tl2.to($circlesBottomRight[1], 0.1, {
        scale: 0.8, x: '+=7', y: '+=3'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[2], 0.1, {
        scale: 0.2, x: '+=15', y: '-=6'
    }
    , '-=0.1');
    tl2.to($circlesBottomRight[0], 1, {
        scale: 0, x: '+=5', y: '+=15', opacity: 0
    }
    );
    tl2.to($circlesBottomRight[1], 1, {
        scale: 0.4, x: '+=7', y: '+=7', opacity: 0
    }
    , '-=1');
    tl2.to($circlesBottomRight[2], 1, {
        scale: 0, x: '+=15', y: '-=5', opacity: 0
    }
    , '-=1');
    tlBt2.set($circlesBottomRight, {
        x: 0, y: 0, rotation: -45
    }
    );
    tlBt2.add(tl2);
    btTl.add(tlBt1);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg10'), 0.8, {
        scaleY: 1.1
    }
    , 0.1);
    btTl.add(tlBt2, 0.2);
    btTl.to(bt1.parentNode.querySelectorAll('.button__bg10'), 1.8, {
        scale: 1, ease: Elastic.easeOut.config(1.2, 0.4)
    }
    , 1.2);
    btTl.timeScale(2.6);
    bt1.addEventListener('click', function() {
        bt1c.style.filter='url(#filter-goo-1)';
        btTl.restart();
    }
    );
}