
<footer>
	<div class="tt-footer-default tt-color-scheme-02">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-9">
					<div class="tt-newsletter-layout-01">
						<div class="tt-newsletter">
							<div class="tt-mobile-collapse">
								<h4 class="tt-collapse-title">
									BE IN TOUCH WITH US:
								</h4>
								<div class="tt-collapse-content">
									<form class="form-inline form-default" method="post"  action="{{route('subscribe.store')}}">
                                        @csrf
										<div class="form-group">
											<input type="text" name="email" class="form-control" placeholder="Enter your e-mail" required>
											<button type="submit" class="btn">JOIN US</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-auto">
					<ul class="tt-social-icon">
						<li><a class="icon-g-64" target="_blank" href="http://www.facebook.com/"></a></li>
						<li><a class="icon-h-58" target="_blank" href="http://www.facebook.com/"></a></li>
						<li><a class="icon-g-66" target="_blank" href="http://www.twitter.com/"></a></li>
						<li><a class="icon-g-67" target="_blank" href="http://www.google.com/"></a></li>
						<li><a class="icon-g-70" target="_blank" href="https://instagram.com/"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="tt-footer-col tt-color-scheme-01">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-2 col-xl-3">
					<div class="tt-mobile-collapse">
						<h4 class="tt-collapse-title">
							CATEGORIES
						</h4>
						<div class="tt-collapse-content">
							<ul class="tt-list">
                                @foreach ($categories as $item)
                                    <li><a href="{{route('product.show.category',$item->id)}}">{{$item->name}}</a></li>
                                @endforeach

							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-2 col-xl-3">
					<div class="tt-mobile-collapse">
						<h4 class="tt-collapse-title">
							Pages
						</h4>
						<div class="tt-collapse-content">
							<ul class="tt-list">
								<li><a href="{{route('about_us')}}">About Us</a></li>
								<li><a href="{{route('contact_us')}}">Contact Us</a></li>
                                <li><a href="{{route('faq')}}">Faq</a></li>
								<li><a href="{{route('terms_and_condition')}}">Terms And Condition</a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3">
					<div class="tt-mobile-collapse">
						<h4 class="tt-collapse-title">
							ABOUT
						</h4>
						<div class="tt-collapse-content">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, seddo eiusmod tempor incididunt ut labore etdolore.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3">
					<div class="tt-newsletter">
						<div class="tt-mobile-collapse">
							<h4 class="tt-collapse-title">
								CONTACTS
							</h4>
							<div class="tt-collapse-content">
								<address>
									<p><span>Address:</span> </p>
									<p><span>Phone:</span> </p>
									<p><span>Hours:</span> </p>
									<p><span>E-mail:</span> <a href="mailto:"></a></p>
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tt-footer-custom">
		<div class="container">
			<div class="tt-row">
				<div class="tt-col-left">
					<div class="tt-col-item tt-logo-col">
						<!-- logo -->
						<a class="tt-logo tt-logo-alignment mt-2" href="{{route('welcome')}}">
							<img  src="{{asset('resource/logo')}}/logo.png" alt="">
						</a>
						<!-- /logo -->
					</div>
					<div class="tt-col-item">
						<!-- copyright -->
						<div class="tt-box-copyright">
							&copy; Shahriar Ratul <script type="text/javascript">
                                document.write(new Date().getFullYear());
                              </script>. All Rights Reserved
						</div>
						<!-- /copyright -->
					</div>
				</div>
				<div class="tt-col-right">
					<div class="tt-col-item">
						<!-- payment-list -->
						{{--  <ul class="tt-payment-list">
							<li><a href="page404.html"><span class="icon-Stripe"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
			                </span></a></li>
							<li><a href="page404.html"> <span class="icon-paypal-2">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
			                </span></a></li>
							<li><a href="page404.html"><span class="icon-visa">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
			                </span></a></li>
							<li><a href="page404.html"><span class="icon-mastercard">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span>
			                </span></a></li>
							<li><a href="page404.html"><span class="icon-discover">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span>
			                </span></a></li>
							<li><a href="page404.html"><span class="icon-american-express">
			                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
			                </span></a></li>
						</ul>  --}}
						<!-- /payment-list -->
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="#" class="tt-back-to-top">BACK TO TOP</a>






<script src="{{ asset('resource/frontend/') }}/external/jquery/jquery.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/slick/slick.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/panelmenu/panelmenu.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/countdown/jquery.plugin.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/countdown/jquery.countdown.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/lazyLoad/lazyload.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/js/main.js"></script>
<!-- form validation and sending to mail -->
<script src="{{ asset('resource/frontend/') }}/external/form/jquery.form.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/form/jquery.validate.min.js"></script>
<script src="{{ asset('resource/frontend/') }}/external/form/jquery.form-init.js"></script>



@stack('js')
@toastr_js
@toastr_render
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{

        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>

<script>
    $(document).ready(function(){

     $('#search').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('autocomplete.fetch') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#search').fadeIn();
                        $('#searchlist').html(data);
              }
             });
            }
        });

        $(document).on('click', 'li', function(){
            $('#search').val($(this).text());
            $('#searchlist').fadeOut();
        });

    });
    </script>
