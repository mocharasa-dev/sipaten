<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-6 px-1 pr-2">
				<h6 style="display:none">Profil</h6>
				<p class="text-white">
					<table class="text-white">
                        {{-- @if(count($profile) > 0)
                        @foreach($profile as $profil)               --}}
						<tr>
							<td valign="top" align="left" style="padding-top: 5px">
								<i class="fa fa-home"></i>
							</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">SiPaten</td>
							<td rowspan="4" align="center">
								<img id="content-desktop" src="{{asset('public/frontend/img/footerlogo.png')}}" class="img-fluid">
							</td>
						</tr>
						<tr>
							<td valign="top" align="left" style="padding-top: 5px">
								<i class="fa fa-map-marked-alt"></i>
							</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">Jl. Mayjen Sutoyo No.46, Karanganyar, Kec. Subang, Kab. Subang, Jawa Barat 41211</td>
						</tr>
						<tr>
							<td valign="top" align="left" style="padding-top: 5px">
								<i class="fa fa-phone"></i>
							</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">(0260) 411318</td>
						</tr>
						<tr>
							<td valign="top" align="left" style="padding-top: 5px">
								<i class="fa fa-envelope"></i>
							</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">diskominfo@subang.go.id</td>
						</tr>
                        {{-- @endforeach
                        @endif         --}}
					</table>
				</p>					
			</div>
			<div class="col-xs-6 col-lg-3 px-1">
				<h6>
					<strong>Statistik Pengunjung</strong>
				</h6>
				<table class="text-white">
					<tr>
						<td valign="top" style="padding-top: 5px">
							<i class="fa fa-globe"></i>
						</td>
						<td valign="top" class="pl-1">Pengguna Online</td>
						<td valign="top" class="pl-1 pr-1">:</td>
						<td valign="top" class="pl-1">4{{-- $userOnline --}}</td>
					</tr>
					<tr>
						<td valign="top" style="padding-top: 5px">
							<i class="fa fa-user"></i>
						</td>
						<td valign="top" class="pl-1">Pengunjung Hari Ini</td>
						<td valign="top" class="pl-1 pr-1">:</td>
						<td valign="top" class="pl-1">10{{-- $visitorToday --}}</td>
					</tr>
					<tr>
						<td valign="top" style="padding-top: 5px">
							<i class="fa fa-users"></i>
						</td>
						<td valign="top" class="pl-1">Total Pengunjung</td>
						<td valign="top" class="pl-1 pr-1">:</td>
						<td valign="top" class="pl-1">99999+{{-- $visitors --}}</td>
					</tr>
				</table>				
			</div>
			<div class="col-xs-6 col-lg-3 px-1">
				<h6>
					<strong>Quick Links</strong>
				</h6>
				<ul class="footer-links">
					<li>
						<a href="{{--route('frontend.pengumuman.list')--}}">Pengumuman</a>
					</li>
					<li>
						<a href="{{--route('frontend.agenda.list')--}}">Agenda</a>
					</li>
					<li>
						<a href="#">Sitemap</a>
					</li>
				</ul>
			</div>
		</div>
		<hr>
	</div>
		<div class="container">
			<div class="row pb-2">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p class="copyright-text">Copyright &copy; 2020 Diskominfo Kabupaten Subang</p>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li>
							<a href="#" class="facebook">
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
</footer>

