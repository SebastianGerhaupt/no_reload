const ROOT_URL="index.php";
const ANIMATION_DURATION=1000;
let classNameAnimationIn="fade-in-down";
let classNameAnimationOut="fade-out-up";

document.addEventListener("DOMContentLoaded", function(){
	show();
	clickRootLink();
	clickReloadLink();
});

function show(){
	window.scrollTo(0, 0);
	document.querySelector(".animate").className=classNameAnimationIn;
	setTimeout(function(){
		document.querySelector("."+classNameAnimationIn).className="show";
	}, ANIMATION_DURATION);
}

function clickRootLink(){
	document.addEventListener("click", function(event){
		if(event.target.classList.contains("root-link")){
			event.preventDefault();
			executeLink(ROOT_URL, ".");
		}
	});
}

function clickReloadLink(){
	document.addEventListener("click", function(event){
		if(event.target.classList.contains("reload-link")){
			event.preventDefault();
			const url=event.target.getAttribute("href");
			executeLink(url, url);
		}
	});
}

function executeLink(loadUrl, historyUrl){
	if(document.getElementsByClassName("show").length==1){
		document.querySelector(".show").className=classNameAnimationOut;
		setTimeout(function(){
			document.querySelector("."+classNameAnimationOut).className="animate";
		}, ANIMATION_DURATION-10);
	}
	else ANIMATION_DURATION=0;
	setTimeout(function(){
		fetch(loadUrl).then(function(response){
			return response.text();
		}).then(function(string){
			let parser=new DOMParser();
			let doc=parser.parseFromString(string, "text/html");
			const content=doc.getElementById("no-reload").innerHTML;
			document.getElementById("no-reload").innerHTML=content;
			show();
		});
		history.pushState({url: historyUrl}, "", historyUrl);
	}, ANIMATION_DURATION);
}