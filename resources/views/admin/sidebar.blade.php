<!-- Sidebar Navigation-->

  <nav id="sidebar">
	<!-- Sidebar Header-->
	<div class="sidebar-header d-flex align-items-center">
	  <div class="avatar"><img src="profile.png" alt="..." class="img-fluid rounded-circle"></div>
	  @if(\Session::has('admin'))
	  <div class="title">
		<h1 class="h5">Admin</h1>
		<p>Shindi's Store</p>
	  </div>
	  @endif
	  @if(!Session::has('admin'))
	  <div class="title">
		<h1 class="h5">Kasir</h1>
		<p>Welcome Back</p>
	  </div>
	  @endif
	</div>
	<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
	<ul class="list-unstyled">
	  <li class="active"><a href="index"> <i class="icon-home"></i>Home</a></li>
	@if(\Session::has('admin'))
	  <li><a href="UserIndex"> <i class="icon-user"></i>User</a></li>
	  <li><a href="ProductIndex"> <i class="icon-padnote"></i>Product </a></li>
	  <li><a href="CategoriesIndex"> <i class="icon-windows"></i>Categories</a></li>
	  <li><a href="CustomerIndex"> <i class="icon-user"></i>Customer</a></li>
	@endif
	  <li><a href="SalesIndex"> <i class="icon-contract"></i>Sales</a></li>
	  <li><a href="PosIndex"> <i class="icon-paper-and-pencil"></i>POS</a></li>
	</ul>
  </nav>
  <!-- Sidebar Navigation end-->
	