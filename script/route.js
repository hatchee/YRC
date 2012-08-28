(function(){

function addoptions(optid,classn) {
optobj = document.getElementById('optid'+optid);
if(optobj.getElementsByTagName('input')[0].checked){
optobj.className="optlistsed";
inshtml = optobj.getElementsByTagName('h4')[0].getElementsByTagName('span')[0].innerHTML;
inshtml = '<input value="'+inshtml+'" type="checkbox" checked="checked" onclick="celoptions(\''+optid+'\')" name="AddOptions[]" />'+inshtml;
if(document.getElementById('assition')){
listteam = document.getElementById('assition').getElementsByTagName('li');
listlong = listteam.length;
y=document.createElement("li");
y.title = optid;
y.className = classn;
y.innerHTML=inshtml;
var bfnode = false;
for(i=listlong-1;i>=0;i--){
if(parseInt(listteam[i].title)>parseInt(optid)) bfnode = listteam[i];
}
if(bfnode) document.getElementById('assition').insertBefore(y,bfnode);
else document.getElementById('assition').appendChild(y);
}
}else{
optobj.className="optlist";
if(document.getElementById('assition')){
listteam = document.getElementById('assition').getElementsByTagName('li');
listlong = listteam.length;
var delnode = false;
for(i=0;i<listlong;i++){
if(listteam[i].title==optid) delnode = listteam[i];
}
if(delnode)document.getElementById('assition').removeChild(delnode);
}
}
}
function celoptions(optid){
optobj = document.getElementById('optid'+optid);
if(optobj.getElementsByTagName('input')[0]){
optobj.getElementsByTagName('input')[0].checked = false;
optobj.className="optlist";
if(document.getElementById('assition')){
listteam = document.getElementById('assition').getElementsByTagName('li');
listlong = listteam.length;
var delnode = false;
for(i=0;i<listlong;i++){
if(listteam[i].title==optid) delnode = listteam[i];
}
if(delnode)document.getElementById('assition').removeChild(delnode);
}
}
} 
$(function(){
	$(window).scroll(function(){
	  screenwidth = $(window).width();
	  screenheight = $(window).height();
	  mytop = $(document).scrollTop();
	  getPosLeft = screenwidth/2-450;
		 getPosTop = screenheight/2-250;
	  $(".cruiseform").css({"left":getPosLeft,"top":getPosTop+mytop});
	 });
	
	$('.enquiry').click(function(e){
		e.preventDefault();
		$(".cruiseform").fadeIn("fast");
		var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});
	});
	$('.btn').click(function(e){
		e.preventDefault();
		$(".cruiseform").fadeIn("fast");
		var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});
	});	
	$(".exit_ico").click(function(){
		$(".cruiseform").hide();
		$("#greybackground").remove();
	});
});
})(jQuery)