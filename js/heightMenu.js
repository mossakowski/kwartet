var navEl = document.getElementsByTagName('nav');
var introEl = document.getElementById('intro');
var heightNav = navEl[0].clientHeight + 'px';
introEl.setAttribute('style','margin-top:' + heightNav);
