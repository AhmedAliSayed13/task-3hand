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
                    <h3 class="page-title">جميع المقالات </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الملف الشخصي</a></li>
                        <li class="breadcrumb-item active"> جميع المقالات</li>
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
													<th>عنوان المقال</th>
													<th>عنوان فرعي للمقال</th>
													<th>محتوي المقال</th>
													<th>حالة المقال</th>
													<th> تاريخ النشر</th>
													
								
													
												</tr>
											</thead>
											<tbody>
                                                @foreach($articles as $article)
                                                    <tr>
                                                        <td>
                                                            {{$loop->iteration}}
                                                        </td>
                                                        <td>
                                                            {{$article->title}}
                                                        </td>
                                                        <td>
                                                            {{showString($article->subtitle)}}
                                                        </td>
                                                        <td>
                                                            {{showString($article->describe)}}
                                                        </td>
                                                        <td>
                                                            @if($article->active)
                                                                <span class="badge badge-pill bg-success inv-badge">مفعل</span>
                                                            @else
                                                            <span class="badge badge-pill bg-danger inv-badge"> غير مفعل</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{$article->created_at->format('m/d/Y')}}
                                                           
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
