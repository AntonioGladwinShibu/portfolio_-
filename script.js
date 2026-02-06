function go(id){document.getElementById(id).scrollIntoView({behavior:"smooth"});}

let btn=document.getElementById("topBtn");
window.onscroll=()=>btn.style.display=document.documentElement.scrollTop>300?"block":"none";
function topFn(){window.scrollTo({top:0,behavior:"smooth"});}

/* Typing */
let text="B.Tech Computer Science Student | Full Stack Developer";
let i=0;
setInterval(()=>{
document.getElementById("typing").innerHTML=text.substring(0,i++);
if(i>text.length)i=0;
},120);

/* Bubble background */
const c=document.getElementById("bg");
const ctx=c.getContext("2d");
c.width=innerWidth;c.height=innerHeight;

let b=[];
for(let i=0;i<70;i++)b.push({x:Math.random()*c.width,y:Math.random()*c.height,r:Math.random()*5+2,d:Math.random()+0.5});

function anim(){
ctx.clearRect(0,0,c.width,c.height);
b.forEach(o=>{
ctx.beginPath();
ctx.arc(o.x,o.y,o.r,0,Math.PI*2);
ctx.fillStyle="#10b981";
ctx.fill();
o.y-=o.d;if(o.y<0)o.y=c.height;
});
requestAnimationFrame(anim);
}
anim();
