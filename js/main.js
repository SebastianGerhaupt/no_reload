const NAVIGATION_LINKS=document.getElementsByClassName("navigation-link");
const NAVIGATION_ICON=document.getElementById("navigation-icon");

document.addEventListener("DOMContentLoaded", function(){
	initializeNavigation(window.location.pathname);
	markActiveNavigationLink();
	changeReloadAnimation();
	//ToDo: copyCode();
	//ToDo: toggleAnimation();
});

function initializeNavigation(path){
	let file=path.substring(path.lastIndexOf("/"));
	if(file==="/") NAVIGATION_ICON.classList.add("navigation-icon-position-0");
	else{
		file=file.substring(1, file.lastIndexOf(".")).replace("_", " ");
		for(let i=0; i<NAVIGATION_LINKS.length; i++){
			if(NAVIGATION_LINKS[i].textContent.trim().toLowerCase()==file) NAVIGATION_ICON.classList.add("navigation-icon-position-"+i);
		}
	}
}

function markActiveNavigationLink(){
	document.addEventListener("click", function(event){
		if(event.target.tagName.toLowerCase()==="a"&&event.target.target!=="_blank"){
			for(let i=0; i<NAVIGATION_LINKS.length; i++){
				if(document.querySelector(".navigation-icon-position-"+i)) NAVIGATION_ICON.classList.remove("navigation-icon-position-"+i);
			}
			initializeNavigation(event.target.href);
		}
	});
}

function changeReloadAnimation(){
	let newClassNameAnimationIn, newClassNameAnimationOut;
	let classList=NAVIGATION_ICON.classList.toString();
	let currentPosition=classList.charAt(classList.length-1);
	document.addEventListener("click", function(event){
		if(event.target.tagName.toLowerCase()==="a"){
			for(let i=0; i<NAVIGATION_LINKS.length; i++){
				if(document.querySelector(".navigation-icon-position-"+i)){
					if(currentPosition<=i){
						newClassNameAnimationIn="fade-in-down";
						classNameAnimationIn=newClassNameAnimationIn;
						newClassNameAnimationOut="fade-out-up";
						classNameAnimationOut=newClassNameAnimationOut;
					}
					else{
						newClassNameAnimationIn="fade-in-up";
						classNameAnimationIn=newClassNameAnimationIn;
						newClassNameAnimationOut="fade-out-down";
						classNameAnimationOut=newClassNameAnimationOut;
					}
					currentPosition=i;
				}
			}
		}
	});
}

/*ToDo:
function copyCode(){
	document.addEventListener("click", function(event){
		if(event.target.classList.contains("copy-button-icon")){
			navigator.clipboard.writeText(event.target.parentElement.parentElement.querySelector(".code-block").textContent);
			notify(event.target.parentElement.nextElementSibling);
		}
	});
}

function notify(element){
	element.classList.add("show");
	setTimeout(function(){
		element.classList.remove("show");
	}, 5000);
}
*/

/*ToDo:
function toggleAnimation(){
	document.getElementById("animation").addEventListener("click", function(event){
		let noReload=document.getElementById("no-reload");
		if(this.checked){
			noReload.classList.add("show");
			animationDuration=1000;
		}
		else noReload.classList.remove("show");
	});
}
*/