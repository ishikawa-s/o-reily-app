
if(window.innerWidth && window.innerWidth <= 480){
	$(document).ready{function(){
		$('#header ul').adClass('hide');
		$('#header').append('<div class="leftButton" onclick="toggleMenu()">メニュー</div>');
	}};

	function toggleMenu(){
		$('#header ul').togleClass('hide');
		$('#header .leftButton').toggleClass('pressed');
	}
}