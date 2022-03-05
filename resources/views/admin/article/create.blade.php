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
                                    <h3 class="page-title">اضافة مقال </h3>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الملف الشخصي</a></li>
                                        <li class="breadcrumb-item active"> اضافة مقال</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form action="{{route('article.store')}}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-2">عنوان المقال </label>
                                                <div class="col-md-10">
                                                    <input type="text" value="{{  old('title')}}" class="form-control @error('title') is-invalid @enderror" name="title">
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-2">عنوان فرعي </label>
                                                <div class="col-md-10">
                                                    <input type="text" value="{{  old('subtitle')}}" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle">
                                                    @error('subtitle')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-2"> محتوي المقال </label>
                                                <div class="col-md-10">
                                                    <textarea rows="5" cols="5" class="form-control @error('describe') is-invalid @enderror" name="describe" >
                                                        {{  old('describe')}}
                                                    </textarea>
                                                    @error('describe')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-2">  التصنيف </label>
                                                <div class="col-md-10">
                                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                                        <option value="">-- Select --</option>
                                                        @foreach($categories as $Category)
                                                            <option value="{{$Category->id}}">{{$Category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mt-3 mb-3">
                                                <button class="btn btn-primary" type="submit">حفظ</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
    
	
	
</div>		
			
			<!-- /Page Wrapper -->


@endsection




@section('js')



@endsection
