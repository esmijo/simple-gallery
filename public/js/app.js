$( document ).ready(function() {
    console.log( "ready!" );

	$('#txt_search').on('keyup', live_search)
	$('#btn_search').click(live_search)

	function live_search() {
		console.log(1)
		$.ajax({
			url:'live_search',
			method:'GET',
			data: {
				'live_search': $('#txt_search').val(),
			},
			dataType:'json',
			success:function(data)
			{
				$('#searchBody').html(data.table_data)
			}
		})
	}

	$('#mng-table').DataTable({
		aLengthMenu: [
			[-1, 10, 20, 50, 100],
			["All", 10, 20, 50, 100],
		],
		searching: false,
	})
})