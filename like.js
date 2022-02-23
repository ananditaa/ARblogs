let likeBtn= document.querySelector('.like-btn');
let likeIcon=document.querySelector('.like-icon i');
let likeText=document.querySelector('.like-text');

let val=1;
let transform=localStorage.getItem('Transform') ;
let color=localStorage.getItem('Color');
let text=localStorage.getItem('Text') || "Like";
likeIcon.style.transform= transform;
likeIcon.style.color=color;
likeText.innerText=text;


likeBtn.addEventListener('click', ()=> {
    
    if (val===1) {
        likeIcon.style.transform="scale(1.2)";
        likeIcon.style.color="red";
        likeText.innerText="Liked";
        localStorage.setItem('Color','red');
        localStorage.setItem('Transform','scale(1.2)');
        localStorage.setItem('Text','Liked');
        val++;
    }else{
        likeIcon.style.transform="scale(1)";
        likeIcon.style.color="white";
        likeText.innerText="Like";
        val--;
        localStorage.setItem('Color','white');
        localStorage.setItem('Transform','scale(1)');
        localStorage.setItem('Text','Like');
    }
    
});



