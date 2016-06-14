@extends('site')

@section('content')

<meta name="csrf-token" content="<?php echo csrf_token(); ?>">
			<!--Friend list-->
			<div class="row friend-list">
				<div class="col-xs-12 col-sm-10 col-md-10">
					<div id="myCarousel" class="carousel slide">
					<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-1.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-2.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-3.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-4.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-1.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-2.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-3.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-4.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-1.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-3.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-4.png')}}" alt="Image" class="img-responsive">
								</div>
							</div>

							<div class="item">
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-1.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-2.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-3.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-4.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-1.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-2.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-3.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-4.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-1.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-3.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="friend-block">
									<img src="{{URL::asset('image-assistant/img/avatar-4.png')}}" alt="Image" class="img-responsive">
								</div>
							</div>
						</div>
						<a class="left my-carousel-control" href="#myCarousel" data-slide="prev">‹</a>
						<a class="right my-carousel-control" href="#myCarousel" data-slide="next">›</a>
					</div>
				</div>
			</div>
			<div class="row main-block">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<!--Side bar-->
					<aside>
						<div class="owner">
							<p class="txt-ghost">Owner</p>
							<div class="owner-head">
								<div class="owner-ava">
									<img src="{{URL::asset('image-assistant/img/avatar-4.png')}}" alt="Image" class="img-responsive">
								</div>
								<div class="owner-pre">
									<p class="live live-link">
										@if (Auth::guest())
											<a href="{{ url('/') }}">Login</a>
										@else
											{{ Auth::user()->name }}  
										@endif
									<span class="txt-ghost">(You)</span></p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Berlin</p>
								</div>
							</div>
							<div class="owner-btn-wrap">
								<div class="owner-btn live" id="editStat">
									Edit
								</div>
								<div class="owner-btn-end live" id="editStatEnd">
									Edit End
								</div>
							</div>
							<div class='owner-btn-wrap owner-link'>
								<p class="live live-link txt-bold"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></p>
							</div>
						</div>

						<div class="weather">
							<div class="weather-head live live-link">
								<div class="weather-hide">
									<i class="fa fa-chevron-up txt-ghost" aria-hidden="true"></i>
								</div>
								<p class="live-link"><i class="fa fa-circle-o" aria-hidden="true"></i></p>
								<p class="live-link">Weather</p>
							</div>
							<div class="weather-toggle">
								<div class="weather-position">
									<div class="weather-hide live">
										<i class="fa fa-cog txt-ghost" aria-hidden="true"></i>
									</div>
									<p class="weather-city txt-bold">San Francisco</p>
									<p class="weather-stat">Thunderstorm</p>
								</div>
								<div class="weather-date">
									<p><i class="fa fa-cloud" aria-hidden="true"></i><span id="w-num">32<sup><small>o</small></sup></span></p>
								</div>
								<div class="weather-ext">
									<p class="txt-ghost">
									SE 7 mph<br><span>Humidity 70%</span>
									</p>
								</div>
								<div class="weather-forecast">
									<div>
										<div>
											Fir
										</div>
										<div>
											<i class="fa fa-sun-o" aria-hidden="true"></i>
										</div>
										<div>
											27<sup><small>o</small></sup>
										</div>
									</div>
									<div>
										<div>
											Sat
										</div>
										<div>
											<i class="fa fa-cloud" aria-hidden="true"></i>
										</div>
										<div>
											39<sup><small>o</small></sup>
										</div>
									</div>
									<div>
										<div>
											Sun
										</div>
										<div>
											<i class="fa fa-cloud" aria-hidden="true"></i>
										</div>
										<div>
											33<sup><small>o</small></sup>
										</div>
									</div>
									<div>
										<div>
											Mon
										</div>
										<div>
											<i class="fa fa-sun-o" aria-hidden="true"></i>
										</div>
										<div>
											37<sup><small>o</small></sup>
										</div>
									</div>
								</div>
								<div class="weather-menu">
									<div class="select">
										<i class="fa fa-cloud" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-newspaper-o" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-camera-retro" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9">
					<!--CONTENT-->
					<div class="title-line">
						<div>
							<p class='txt-bold'><img src="{{URL::asset('image-assistant/img/sail_boat.png')}}" class=" img-all"> Sunseeker Super 43 (2007)</p>
						</div>
						<div>
							<p class='txt-bold'><i class="fa fa-circle" aria-hidden="true"></i> Black Pearl</p>
						</div>
						<div >
							<p class='txt-bold title-stat'>Availabel for charter</p>
						</div>
					</div>
					<article>
						<!-- Date -->
						<div class="user-date">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs nav-cont" role="tablist">
								<li role="presentation"><a href="#basic-info" aria-controls="basic-info" role="tab" data-toggle="tab">Basic info</a></li>
								<li role="presentation" class="active"><a href="#specifications" aria-controls="specifications" role="tab" data-toggle="tab">Specifications</a></li>
								<li role="presentation"><a href="#extras" aria-controls="extras" role="tab" data-toggle="tab">Extras & Comtort</a></li>
								<li role="presentation"><a href="#classifieds" aria-controls="classifieds" role="tab" data-toggle="tab">Classifieds</a></li>
								<li role="presentation"><a href="#logbook" aria-controls="logbook" role="tab" data-toggle="tab">Logbook</a></li>
								<li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments<span id="com-ms">(23)</span></a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content tab-cont">
								<div role="tabpanel" class="tab-pane" id="basic-info">basic-info</div>
								<div role="tabpanel" class="tab-pane active" id="specifications">specifications</div>
								<div role="tabpanel" class="tab-pane" id="extras">extras</div>
								<div role="tabpanel" class="tab-pane" id="classifieds">classifieds</div>
								<div role="tabpanel" class="tab-pane" id="logbook">logbook</div>
								<div role="tabpanel" class="tab-pane" id="comments">comments</div>
							</div>

						</div>
						<!-- Image -->
						<div class="tab-image">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs nav-cont" role="tablist">
								<li role="presentation"><a href="#external" aria-controls="external" role="tab" data-toggle="tab">External <span>(2)</span></a></li>
								<li role="presentation" class="active"><a href="#interlors" aria-controls="interlors" role="tab" data-toggle="tab">Interlors <span>(8)</span></a></li>
								<li role="presentation"><a href="#on-deck" aria-controls="on-deck" role="tab" data-toggle="tab">On deck <span>(2)</span></a></li>
								<li role="presentation"><a href="#cabins" aria-controls="cabins" role="tab" data-toggle="tab">Cabins <span>(2)</span></a></li>
								<li role="presentation"><a href="#salon" aria-controls="salon" role="tab" data-toggle="tab">Salon <span>(2)</span></a></li>
								<li role="presentation"><a href="#galery" aria-controls="galery" role="tab" data-toggle="tab">Galery<span>(2)</span></a></li>
								<li role="presentation"><a href="#rigging" aria-controls="rigging" role="tab" data-toggle="tab">Rigging</a></li>
								<li role="presentation"><a href="#under-sails" aria-controls="under-sails" role="tab" data-toggle="tab">Under Sails<span>(2)</span></a></li>
								<li role="presentation"><a href="#water-toys" aria-controls="water-toys" role="tab" data-toggle="tab">Water Toys<span>(2)</span></a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content tab-cont">
								<div role="tabpanel" class="tab-pane" id="external">external</div>
								<div role="tabpanel" class="tab-pane active" id="interlors">
									<form action="/upload.php" id="form-img" data-star="0">
										<div id="dropZone">
											<i class="fa fa-camera" aria-hidden="true"></i><br>
										Drag & Drop here
										</div>
									</form>
									<div class='row' id="img-wrap">

									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="on-deck">on-deck</div>
								<div role="tabpanel" class="tab-pane" id="cabins">cabins</div>
								<div role="tabpanel" class="tab-pane" id="galery">galery</div>
								<div role="tabpanel" class="tab-pane" id="salon">salon</div>
								<div role="tabpanel" class="tab-pane" id="rigging">rigging</div>
								<div role="tabpanel" class="tab-pane" id="under-sails">under-sails</div>
								<div role="tabpanel" class="tab-pane" id="water-toys">water-toys</div>
							</div>

						</div>
					</article>
				</div>
			</div>


		<!--Out-->
		<div class="message">
			<div class="message-head">
				<div class="msgh-left">
					<p class="p-title">Newsfeed</p>
				</div>
				<div class="msgh-right">
					<p class="live live-link" id="close-message">Expand <i class="fa fa-times" aria-hidden="true"></i></p>
				</div>
			</div>
			<div class="message-ava">
				<img src="{{URL::asset('image-assistant/img/avatar-2.png')}}" alt="..." class="img-all">
			</div>
			<div class="message-body">
				<p class="live live-link">jessica Smith</p>
				<p class="txt-bold"><i class="fa fa-map-marker" aria-hidden="true"></i> Berlin</p>
				<p class="txt-bold">Hey everybody. Me and tom are going to visit California</p>
				<p class="txt-ghost">Sep 20, 2014 at 12:20pm</p>

			</div>
		</div>

		<script>
		/*================
		 	Dnd Start
		================*/
		$('#editStat').click(function(){
				$('#form-img').fadeIn( 300, function() {});
				$('#form-img').attr('data-star' , 1);
				$('#editStat').hide();
				$('#editStatEnd').show();
				
			}
		);
		$('#editStatEnd').click(function(){
				$('#form-img').fadeOut( 300, function() {});
				$('#form-img').attr('data-star' , 0);
				$('#editStat').show();
				$('#editStatEnd').hide();
				
		})

			var dropZone = $('#dropZone'),
				maxFileSize = 4000000; // max file size - 4мб.

			// Проверка поддержки браузером 
			if (typeof(window.FileReader) == 'undefined') {
				dropZone.text('Не поддерживается браузером!');
				dropZone.addClass('error');
				//Заменить на класическую форму
			}

			// Добавляем класс hover при наведении
			dropZone[0].ondragover = function() {
				dropZone.addClass('hover');
				return false;
			};

			// Убираем класс hover
			dropZone[0].ondragleave = function() {
				dropZone.removeClass('hover');
				return false;
			};

			// Обрабатываем событие Drop
			dropZone[0].ondrop = function(event) {
				//console.log('drop Start');
				event.preventDefault();
				dropZone.removeClass('hover');
				dropZone.addClass('drop');

				var file = event.dataTransfer.files[0];

				// Проверяем размер файла
				//console.log(file);
				if (file.size > maxFileSize) {
					dropZone.html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i><br>File is too large!');
				} else{
					// Перекодируем
					var formData = new FormData;
					formData.append('img', file);
					formData.append('iduser', {{Auth::user()->id}});
					//Создаем запрос
					$.ajax({
						url: "{{ url('/upimg') }}",
						cache: false, 
						data: formData,
						processData: false,
						contentType: false,
						type: "POST",
						beforeSend: function(request) {  // защита CSRF
							return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
						},
						success: function(data) {
						//console.log('success start');
						console.log(data);
						//console.log('success end');
						getImg();
					}
			})


				}

			};
			
			// Показываем процент загрузки
			function uploadProgress(event) {
				var percent = parseInt(event.loaded / event.total * 100);
				dropZone.text('Загрузка: ' + percent + '%');
			}
			
			// Пост обрабочик
			function stateChange(event) {
				if (event.target.readyState == 4) {
					if (event.target.status == 200) {
						dropZone.html('<i class="fa fa-check-square-o" aria-hidden="true"></i>Loading is complete!');
					} else {
						dropZone.html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i><br>Error!');
						dropZone.addClass('error');
					}
				}
			}

		/*================
		 	Get img
		================*/
			function getImg(){
				$( "#img-wrap" ).html('');
				$.ajax({
					url: "{{ url('/getimgs') }}",
					cache: false,
					data:{ iduser: {{Auth::user()->id}} },
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
			getImg();
		/*================
		 	Сreate img
		================*/
			function createimg(date){
				var imgList = JSON.parse(date);
				var count = imgList.length;
				for(i = 0; i < count; i++){
					//console.log(imgList[i]);
					$( "#img-wrap" ).append( '<div id="del'+imgList[i].id+'" onclick="imgDel('+imgList[i].id+')"  class="col-md-3 img-gal"><img src="{{URL::asset('images/')}}'+'/'+imgList[i].name+'" alt="..." class="img-thumbnail"></div>');
				}
				imgHover();
			}
		/*================
		 	Del img
		================*/
			function imgHover(){
				$( ".img-gal" ).hover(
					
					function() {
						if ($('#form-img').attr('data-star') == '1') $(this).append('<div class="psy"><i class="fa fa-ban" aria-hidden="true"></i></div>');
					},function(){
						$('.psy').remove('');
					}
				);
			}
			function imgDel(id){
				if ($('#form-img').attr('data-star') == '1'){
					var idImg = id;
					$.ajax({
						url: "{{ url('/delimgs') }}",
						cache: false, 
						type: "POST",
						data: { idimg: idImg },
						beforeSend: function(request) {  // защита CSRF
							return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
						},
						success: function(data) {
							//console.log(data);
							$('#del'+idImg).fadeOut( 300, function() {});
						}
					})
				}

			}

		</script>

@endsection