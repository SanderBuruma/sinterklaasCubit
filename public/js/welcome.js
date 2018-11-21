jQuery(document).ready(function(){

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	});

	$('#new-wish')[0].onkeydown = function(e){
		console.log('submit');
		if (e.keyCode == 13){
			console.log('keycode'+e.keyCode);
			e.preventDefault();


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
			wishTable = document.getElementById('wish-table');
			wishTable.innerHTML = '';
			let count = 1;
			for (let i of result){
				wishTable.innerHTML += `
				<tr data-user-id="${i.user_id}" class="content-justify-center">
					<td>${count++} -</td>
					<td>${i.wish}</td>
					<td><h3 data-wish-id="${i.id}" class="wish-delete" id="wish${i.id}" onclick=deleteWish("wish${i.id}");>X</h3></td>
				</tr>`;
			};
			document.getElementById('wish-input-count').innerHTML = `${count++} -`

		},
		error: function(jqxhr, status, exception) {
			console.log('Exception:', exception);
			console.log(status);
			console.log(jqxhr);
		}
	});
};

function deleteWish (e){
	self = document.getElementById(e);
	console.log("/item/"+self.dataset.wishId)
	jQuery.ajax({
		url: "/item/"+self.dataset.wishId,
		method: 'delete',
		data: {id: self.dataset.wishId},
		success: function(msg){
			//what to do on success
			refreshWishList();
			console.log(msg);
		},
		error: function(jqxhr, status, exception) {
			console.log('Exception:', exception);
			console.log(status);
			console.log(jqxhr);
		}
	});
}