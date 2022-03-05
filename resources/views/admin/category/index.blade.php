@extends('admin.layouts.master')



@section('css')

@endsection


@section('content')

<!-- Page Wrapper -->

    <div class="content container-fluid">
                    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">اضافة تصنيف </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الملف الشخصي</a></li>
                        <li class="breadcrumb-item active"> اضافة تصنيف</li>
                    </ul>
                </div>
            </div>
            		
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>المسلسل </th>
													<th>اسم التصنيف</th>
								
													
												</tr>
											</thead>
											<tbody>
                                                @foreach($categories as $category)
                                                    <tr>
                                                        <td>
                                                            {{$loop->iteration}}
                                                        </td>
                                                        <td>
                                                            {{$category->name}}
                                                        </td>
                                                        
                                                        
                                                    </tr>
                                                @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
			
        </div>
        <!-- /Page Header -->

                        



    </div>		
			
			<!-- /Page Wrapper -->


@endsection




@section('js')



@endsection
