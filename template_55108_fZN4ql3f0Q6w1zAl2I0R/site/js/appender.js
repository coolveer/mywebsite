$(document).ready(function(){
	$('#content').load('blogs.php');
	$('main section h7 a').click(function() {
		$.get('blogs.php', function(data) {
			$('#content').append(data);
		});
		return false;
	});
});