$(document).ready(function(){
	loadPage();
});
function loadPage(url){
	$('body').append('<div id="progress">読みこみ中...</div>');
	if(url == undefined){
		$('#container').load('index.html #header ul', hijackLinks);
	}else{
		$('#container').load(url + '#content', hijackLinks);
	}
}
function hijackLinks(){
	$('#conteiner a').click(function(e){
		e.preventDefault();
		loadPage(e.target.href);
	});
	$('#progress').remove();
}