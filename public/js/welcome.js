jQuery(document).ready(function(){
	$('#new-wish')[0].onkeydown = function(e){
		console.log('submit');
		if (e.keyCode == 13){
			console.log('keycode'+e.keyCode);
			e.preventDefault();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});

			jQuery.ajax({
				url: "/item",
				method: 'post',
				data: {
					wish: jQuery('#new-wish').val(),
					user_id: jQuery('#user-id').val()
				},
				success: function(result){
					//what to do on success
					console.log('ajax success');
					$('#new-wish')[0].value = '';
					console.log(result);
				},
				error: function(jqxhr, status, exception) {
					console.log('Exception:', exception);
					console.log(status);
				}
			});
		};
	};
});