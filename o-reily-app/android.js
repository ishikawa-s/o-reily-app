$(document).ready(function(){
	loadPage();
});
function loadPage(url){
	$('body').append('<div id="progress">読みこみ中...</div>');
	scrollTo(0,0);
	if(url == undefined){
		$('#container').load('index.html #header ul', hijackLinks);
	}else{
		$('#container').load(url + '#content', hijackLinks);
	}
}
function hijackLinks(){
	$('#container a').click(function(e){
		var url = e.target.href;
		if(url.match(/192.168.15.180/)){
			e.preventDefault();
			loadPage(e.target.href);
		}
	});
	var title = $('h2').html() || 'こんにちは';
	$('h1').html(title);
	$('h2').remove();
	$('#progress').remove();
}