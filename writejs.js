const textarea= document.querySelector("textarea");
textarea.addEventListener("keyup", e =>{
    textarea.style.height = "63px";
    let height= e.target.scrollHeight;
    textarea.style.height = `${height}px`;
})

function charcount(){
    var blogHeadingLength= (document.getElementById('title').value.length);
    document.getElementById('title-text-count').innerHTML= blogHeadingLength+"/50(Max Character 50)";
    var blogHeading=document.getElementById('title').value;
   
    if (blogHeadingLength>50) {
        blogHeading= blogHeading.slice(0,50);
        document.getElementById('title').value=  blogHeading;
    }
}
