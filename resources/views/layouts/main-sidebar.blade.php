<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='admin\index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='admin\index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='admin\index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='admin\index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">Petey Cruiser</h4>
							<span class="mb-0 text-muted">Premium Member</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category">متجر الكتروني</li>
{{--					<li class="slide">--}}
{{--						<a class="side-menu__item" href="{{ url('/' . $page='admin\index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">الرئيسية</span><span class="badge badge-success side-badge">1</span></a>--}}
{{--					</li>--}}
					<li class="side-item side-item-category">الصفحات</li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='admin\slider') }}">
                            <i class="fas fa-images ml-3 "></i>
                            <span class="side-menu__label">الصور المتحركة</span><span class="badge badge-danger side-badge"></span></a>
					</li>

                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='admin\admins') }}">
                            <i class="fas fa-user-cog ml-3"></i>
                            <span class="side-menu__label">الادمن</span><span class="badge badge-danger side-badge"></span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='admin\categories') }}">
                            <i class="fas fa-folder ml-3"></i>
                            <span class="side-menu__label">التصنيفات</span><span class="badge badge-danger side-badge"></span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='admin\sponsors') }}">
                            <i class="fas fa-handshake ml-3"></i>
                            <span class="side-menu__label">شركاء النجاح</span><span class="badge badge-danger side-badge"></span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='admin\products') }}">
                            <i class="fas fa-shopping-bag ml-3"></i>
                            <span class="side-menu__label">المنتجات</span><span class="badge badge-danger side-badge"></span>
                        </a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='admin\contact') }}">
                            <i class="fas fa-envelope ml-3"></i>
                            <span class="side-menu__label">تواصل معنا</span><span class="badge badge-danger side-badge"></span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='admin\about') }}">
                            <i class="fas fa-info-circle ml-3"></i>
                            <span class="side-menu__label">من نحن</span><span class="badge badge-danger side-badge"></span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='admin\reviews') }}">
                            <i class="fas fa-star ml-3"></i>
                            <span class="side-menu__label">اراء العملاء</span><span class="badge badge-danger side-badge"></span></a>
                    </li>
=
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
