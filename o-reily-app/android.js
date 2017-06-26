var starturl = 'index.html'

$(document).ready(function(){
	loadPage(starturl);
});
function loadPage(url){
	$('body').append('<div id="progress">読みこみ中...</div>');
	if(url == starturl){
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
	var title = $('h2').html() || 'こんにちは';
	$('h1').html(title);
	$('h2').remove();
	$('#progress').remove();
}