@extends('admin.layouts.master')



@section('css')

@endsection


@section('content')

<!-- Page Wrapper -->

<div class="content container-fluid">
					
	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-title">  مرحبأ {{auth()->user()->name}}</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item active">الملف الشخصي</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Page Header -->

	<div class="row">
		<div class="col-xl-3 col-sm-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="dash-widget-header">
						<span class="dash-widget-icon text-primary border-primary">
							<i class="fe fe-users"></i>
						</span>
						<div class="dash-count">
							<h3>{{$usersCount}}</h3>
						</div>
					</div>
					<div class="dash-widget-info">
						<h6 class="text-muted">Visitors</h6>
						<div class="progress progress-sm">
							<div class="progress-bar bg-primary w-50"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="dash-widget-header">
						<span class="dash-widget-icon text-success">
							<i class="fe fe-credit-card"></i>
						</span>
						<div class="dash-count">
							<h3>{{$articlesCount}}</h3>
						</div>
					</div>
					<div class="dash-widget-info">
						
						<h6 class="text-muted">Articles</h6>
						<div class="progress progress-sm">
							<div class="progress-bar bg-success w-50"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="dash-widget-header">
						<span class="dash-widget-icon text-danger border-danger">
							<i class="fe fe-money"></i>
						</span>
						<div class="dash-count">
							<h3>{{$categoriesCount}}</h3>
						</div>
					</div>
					<div class="dash-widget-info">
						
						<h6 class="text-muted">Categories</h6>
						<div class="progress progress-sm">
							<div class="progress-bar bg-danger w-50"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="dash-widget-header">
						<span class="dash-widget-icon text-warning border-warning">
							<i class="fe fe-folder"></i>
						</span>
						<div class="dash-count">
							<h3>{{$commentsCount}}</h3>
						</div>
					</div>
					<div class="dash-widget-info">
						
						<h6 class="text-muted">comments</h6>
						<div class="progress progress-sm">
							<div class="progress-bar bg-warning w-50"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
</div>		
			
			<!-- /Page Wrapper -->


@endsection




@section('js')



@endsection
