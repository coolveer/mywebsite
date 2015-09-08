$(document).ready(function(){
	$('#content').load('blogs.php');
	$('main a').click(function() {
		$.get('blogs.php', function(data) {
			$('#content').append(data);
		});
		return false;
	});
});