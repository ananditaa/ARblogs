window.onscroll=function(){scrolling();}
function scrolling(){
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var srcHeight = document.documentElement.scrollHeight   -document.documentElement.clientHeight;
    var scrolled = (winScroll/srcHeight)*100;
    document.querySelector('.progress-bar') .style.width=scrolled+'%';

    console.log('hello');
    var value=scrolled;
    var boxAnimation= document.getElementById('box-id');
    var coinAnimation= document.getElementById('coin-id');
    console.log(value);
    if (value>50) {
 
       boxAnimation.classList.add('box-animation');
       coinAnimation.classList.add('coin-animation');
    }
    else{
        boxAnimation.classList.remove('box-animation');
        coinAnimation.classList.remove('coin-animation');
    }
    return scrolled;
   
}

