// JavaScript Document
window.onload=function()
{
	function flyad(){
			var adWindow = document.getElementById('adWindow');
			var adWindow_btn = document.getElementById('adWindow_btn');
			var height = document.body.offsetHeight ;
			var width = document.body.offsetWidth;
			var winHeight = adWindow.offsetHeight;
			var winWidth = adWindow.offsetWidth;
			var dx = 1;
		    var dy = 1;
			var timer=null;

			// 每timer毫秒执行一次移动
			function fly(){
				
				var top = adWindow.offsetTop + 3 * dy;
				var left = adWindow.offsetLeft + 3 * dx;

				if(dy == 1 && top >= height-winHeight/3){
					dy = -1;
				}else if(dy == -1 && top <= 0){
					dy = 1;
				}
				
				if(dx == 1 && left >= width - winWidth){
					dx = -1;
				}else if(dx == -1 && left <= 0){
					dx = 1;
				}

				adWindow.style.top = top + 'px';
				adWindow.style.left = left + 'px';
			}
			timer=setInterval(fly, 30);
			adWindow.onmouseover=function(){
				clearInterval(timer);
				};
			adWindow.onmouseout=function(){
					timer=setInterval(fly, 30);
				};
			adWindow_btn.onclick=function(){
			adWindow.style.display='none';
			}
			}
	flyad();
	//上面是飞窗
function selectcar(id){
var odiv=document.getElementById(id);
var abtn=odiv.getElementsByTagName('span');
var adiv1=$(".news_img_content");
for(var i=0;i<abtn.length;i++){
	 abtn[i].index=i;
   abtn[i].onclick=function(){
	   
	  for(var i=0;i<2;i++){
		  abtn[i].className='';
		  adiv1[i].style.display='none';
		  } 
		  this.className='active';
	 adiv1[this.index].style.display='block';
   };
}
	}
	selectcar('selectCar_img');
	//上面是左边图片和视频选项卡切换
	
	function pictureMove(){
	var oDiv = document.getElementById('picture_roll');
	var oUl1 = oDiv.getElementsByTagName('ul')[0];
	var oUl2= oDiv.getElementsByTagName('ul')[1];
	oUl2.innerHTML=oUl1.innerHTML;
	function move_img(){
        if(oDiv.scrollLeft>=oUl1.offsetWidth)
        oDiv.scrollLeft-=oUl1.offsetWidth;
        else
        oDiv.scrollLeft+=1;
        }
	var timer=setInterval(move_img,30);
	
	oDiv.onmouseover=function()
	{
		clearInterval(timer);
	};
	oDiv.onmouseout=function()
	{
		timer=setInterval(move_img,30);
	};
	}
	pictureMove();
//上面是图片无缝滚动
	
	function fade_move(id){
var interv=2000; //切换间隔时间
var interv2=10; //切换速速
var opac1=80; //文字背景的透明度
var source=id; //焦点轮换图片容器的id名称
//获取对象
function getTag(tag,obj){if(obj==null){return document.getElementsByTagName(tag)}else{return obj.getElementsByTagName(tag)}}
function getid(id){return document.getElementById(id)};
var opac=0,j=0,t=63,num,scton=0,timer,timer2,timer3;var id=getid(source);id.removeChild(getTag("div",id)[0]);var li=getTag("li",id);var div=document.createElement("div");var title=document.createElement("div");var span=document.createElement("span");var button=document.createElement("div");button.className="button";for(var i=0;i<li.length;i++){var a=document.createElement("a");a.innerHTML=i+1;a.onclick=function(){clearTimeout(timer);clearTimeout(timer2);clearTimeout(timer3);j=parseInt(this.innerHTML)-1;scton=0;t=63;opac=0;fadeon();};a.className="b1";a.onmouseover=function(){this.className="b2"};a.onmouseout=function(){this.className="b1";sc(j)};button.appendChild(a);}
//控制图层透明度
function alpha(obj,n){if(document.all){obj.style.filter="alpha(opacity="+n+")";}else{obj.style.opacity=(n/100);}}
//控制焦点按钮
function sc(n){for(var i=0;i<li.length;i++){button.childNodes[i].className="b1"};button.childNodes[n].className="b2";}
title.className="num_list";title.appendChild(span);alpha(title,opac1);id.className="d1";div.className="d2";id.appendChild(div);id.appendChild(title);id.appendChild(button);
//渐显
var fadeon=function(){opac+=5;div.innerHTML=li[j].innerHTML;span.innerHTML=getTag("img",li[j])[0].alt;alpha(div,opac);if(scton==0){sc(j);num=-2;scrolltxt();scton=1};if(opac<100){timer=setTimeout(fadeon,interv2)}else{timer2=setTimeout(fadeout,interv);};}
//渐隐
var fadeout=function(){opac-=5;div.innerHTML=li[j].innerHTML;alpha(div,opac);if(scton==0){num=2;scrolltxt();scton=1};if(opac>0){timer=setTimeout(fadeout,interv2)}else{if(j<li.length-1){j++}else{j=0};fadeon()};}
//滚动文字
var scrolltxt=function(){t+=num;span.style.marginTop=t+"px";if(num<0 && t>3){timer3=setTimeout(scrolltxt,interv2)}else if(num>0 && t<62){timer3=setTimeout(scrolltxt,interv2)}else{scton=0}};
fadeon();
}
fade_move("fade_focus");
fade_move("fade_focus1");



function move(){
var box=document.getElementById('box_main_right_notice_box');
var box1=document.getElementById('box_main_right_notice_box1');
var ap=box.getElementsByTagName('p');
var timer=null;
if(box.scrollTop>=300){
	box.scrollTop=0;
	}
if(box.scrollTop<300){
	box.scrollTop+=2;
	timer=setTimeout(move,100);
}
	for(var i=0;i<ap.length;i++){
		ap[i].onmouseover=function(){
			clearTimeout(timer);
			}
		ap[i].onmouseout=function(){
				timer=setTimeout(move,30);
			}
		}
	}
move();
//上面是文字滚动



}
function displaySubMenu(li) { 

var subMenu = li.getElementsByTagName("ul")[0]; 
subMenu.style.display = "block"; 
} 
function hideSubMenu(li) { 

var subMenu = li.getElementsByTagName("ul")[0]; 
subMenu.style.display = "none"; 
}
//上面是导航菜单
function displayfenju(li) { 
var subMenu = li.getElementsByTagName("div")[0]; 
subMenu.style.display = "block"; 
} 
function hidefenju(li) { 
var subMenu = li.getElementsByTagName("div")[0]; 
subMenu.style.display = "none"; 
}
//上面显示地方税务局


