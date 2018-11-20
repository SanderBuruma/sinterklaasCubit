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
					refreshWishList();
				},
				error: function(jqxhr, status, exception) {
					console.log('Exception:', exception);
					console.log(status);
				}
			});
		};
	};

});


refreshWishList();


function refreshWishList(){

	jQuery.ajax({
		url: "/item/"+jQuery('#user-id').val(),
		method: 'get',
		success: function(result){
			//what to do on success
			console.log('ajax index');
			console.log(result);
			wishTable = document.getElementById('wish-table');
			wishTable.innerHTML = '';
			let count = 1;
			for (let i of result){
				wishTable.innerHTML += `
				<tr id="item${i.user_id}" data-user-id="${i.user_id}" class="content-justify-center">
					<td>${count++} - </td>
					<td>${i.wish}</td>
					<td></td>
				</tr>`;
			};
			document.getElementById('wish-input-count').innerHTML = `${count++} - `
			console.log(wishTable.innerHTML);

		},
		error: function(jqxhr, status, exception) {
			console.log('Exception:', exception);
			console.log(status);
			console.log(jqxhr);
		}
	});

};
