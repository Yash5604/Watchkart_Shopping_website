let flag = false ;
function toggle() {
    if(flag){
        document.getElementById("pass").setAttribute("type","password");
        flag = false ;
    }
    else{
        document.getElementById("pass").setAttribute("type","text");
        flag = true ;
    }
}
let flag2= false ;
    function toggle2() {
        if(flag2){
            document.getElementById("cpass").setAttribute("type","password");
        flag2 = false ;
    }
     else{
        document.getElementById("cpass").setAttribute("type","text");
        flag2 = true ;
    }
}

let navToggler = document.querySelector('.nav-toggler');
navToggler.addEventListener('click',navToggle) ;

function navToggle() {
    navToggler.classList.toggle(".active");
    const nav = document.querySelector(".nav ul");
    nav.classList.toggle("open") ;
}



// circle Animation
document.body.addEventListener('click',(e)=>{
    const element = document.createElement('span') ;
    element.className = 'circle' ;
    
    element.style.left = e.clientX  + 'px' ;
    element.style.top = e.clientY + 'px' ;

    document.body.append(element) ; 

    setTimeout(()=>{
        element.remove()
    },900)
})

// counting elements in website using addEventListener
let btn = document.getElementById('btn');

let heading_h1 , heading_h4 ;

btn.addEventListener('click',()=>{
    heading_h1 = document.getElementsByTagName('h1');
    heading_h4 = document.getElementsByTagName('h4');
    console.log(`The number of h1 in tags in page is: ${heading_h1.length} and
     number of h4 tags in page is: ${heading_h4.length}`);

     btn.textContent = 'Check' ;
     btn.disabled = true ;

     setTimeout(()=>{
        btn.textContent = 'Count' ;
        btn.disabled = false ;
     },900) ;

}) ;

//hover effect of box using javascript

let b1= document.getElementById('box1');
let b2= document.getElementById('box2');
let b3= document.getElementById('box3');

b1.addEventListener('mouseenter',()=>{
    console.log("cursor on website visitors box") ;
    b1.style.backgroundColor = 'orange' ;
});
b1.addEventListener('mouseleave',()=>{
    console.log("cursor on document");
    b1.style.backgroundColor = '#c0c0c0' ;
    
});

b2.addEventListener('mouseenter',()=>{
    console.log("cursor on register users box") ;
    b2.style.backgroundColor = 'orange' ;
});
b2.addEventListener('mouseleave',()=>{
    console.log("cursor on document");
    b2.style.backgroundColor = '#c0c0c0' ;
});

b3.addEventListener('mouseenter',()=>{
    console.log("cursor on current stock box") ;
    b3.style.backgroundColor = 'orange' ;
});
b3.addEventListener('mouseleave',()=>{
    console.log("cursor on document");
    b3.style.backgroundColor = '#c0c0c0' ;
});


let buybtn = document.getElementById('buy-btn');

$('#buy-btn').click(function(){
    $('.rem-por').hide() ;
})





