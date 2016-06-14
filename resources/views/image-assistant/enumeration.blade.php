@extends('site')

@section('content')
<meta name="csrf-token" content="<?php echo csrf_token(); ?>">
	<h1>Users list</h1>
	<div class="row">
		<div class=" col-xs-12 col-sm-12 col-md-12">
			<table class="table table-striped">
				<?php
					foreach ($user_list as $user) {
						print("<tr id=\"tr" . $user->id  . "\">
								<td class=\"tbl-id\">" . $user->id  . "</td>
								<td class=\"tbl-user\">" . $user->name  . "</td>
								<td onclick=\"getImgList(" . $user->id  . ")\">Show photo</td>
								<td class=\"tbl-live dodel\" data-id=\"" . $user->id  . "\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></td>

							  </tr>");
					}
				?>
			<table>
		</div>
	</div>
	<div class="row" id="img-wrap">

	</div>
	<script>
		$('.dodel').click(function(){
			var id = $(this).attr( "data-id");
			console.log('dodel' + id);
			$('#tr'+id).fadeOut( "slow", function() {});

			$.ajax({
				url: "{{ url('/linkdel') }}",
				cache: false, 
				data: { id: id },
				type: "POST",
				beforeSend: function(request) {  // защита CSRF
					return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
				},
				success: function(data) {
					console.log(data);
					
				}
			})
		})

		function getImgList(id){
				
				$( "#img-wrap" ).html('');
				$.ajax({
					url: "{{ url('/getimgs') }}",
					cache: false,
					data:{ iduser: id },
					type: "POST",
					beforeSend: function(request) {  // защита CSRF
						return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
					},
					success: function(data) {
						//console.log(data);
						createimg(data);
					}
				})
		
		}
		function createimg(date){
			var imgList = JSON.parse(date);
			var count = imgList.length;
			for(i = 0; i < count; i++){
				//console.log(imgList[i]);
				$( "#img-wrap" ).append( '<div id="del'+imgList[i].id+'" onclick="imgDel('+imgList[i].id+')"  class="col-md-3 img-gal"><img src="{{URL::asset('images/')}}'+'/'+imgList[i].name+'" alt="..." class="img-thumbnail"></div>');
			}
		
		}

	</script>


@endsection