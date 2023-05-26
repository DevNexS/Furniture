function loadOctFonts() {
    let cssId = 'octFonts';
    let octFonts = localStorage.getItem('octFonts');

    if(!octFonts && !document.getElementById(cssId)) {

        let head  = document.getElementsByTagName('head')[0];
        let link  = document.createElement('link');
        link.id   = cssId;
        link.rel  = 'stylesheet';
        link.type = 'text/css';
        link.href = location.protocol + '//' + location.host + '/catalog/view/theme/oct_remarket/stylesheet/oct-fonts.css';
        link.media = 'all';
        head.appendChild(link);
        localStorage.setItem('octFonts', '1');

    }
}

loadOctFonts();
