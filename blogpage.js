window.onscroll=function(){scrolling();}
function scrolling(){
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var srcHeight = document.documentElement.scrollHeight   -document.documentElement.clientHeight;
    var scrolled = (winScroll/srcHeight)*100;
    document.querySelector('.progress-bar') .style.width=scrolled+'%';
    var value=scrolled;
    console.log(value);
}