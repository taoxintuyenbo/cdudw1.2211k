@extends('layouts.admin')
@section('title','Addmenu')
@section('content')
<div class="content-wrapper">
    <!-- CONTENT -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
      <div class="card-header">
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="{{ route('admin.menu.index') }}" class="btn btn-sm btn-info">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Menus
                        </a>
                    </div>
                </div>
            </div>
        <div class="card-body">
        <form action="{{route('admin.menu.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center">Add menu</h1>
                <div class="container">
                    <div class="row g-3">
                        <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input
                                type="name"
                                id="name"
                                class="form-control"
                                name="name"
                                value="{{ old('name') }}"
                            />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input
                                type="text"
                                id="link"
                                class="form-control"
                                name="link"
                                value="{{ old('link') }}"
                            />
                            @error('link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                        
                        <div class="col-md-12 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" class="form-control" name="type">
                            <option value="category" {{ old('type') == 'category' ? 'selected' : '' }}>Category</option>
                            <option value="topic" {{ old('type') == 'topic' ? 'selected' : '' }}>Topic</option>
                            <option value="page" {{ old('type') == 'page' ? 'selected' : '' }}>Page</option>
                        </select>
                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-control">
                                <option value="mainmenu">Main menu</option>
                                <option value="footermenu">Footer menu</option>
                            </select>
                            @error('position')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                                    <label for="parent_id">Parent ID</label>
                                    <select name="parent_id" id="parent_id" class="form-control">
                                        <option value="0">Cấp cha</option>
                                        {!! $htmlparentid !!}
                                    </select>
                                    @error('parent_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="sort_order">Sort Order</label>
                                    <select name="sort_order" id="sort_order" class="form-control">
                                        <option value="">Chọn vị trí</option>
                                        {!! $htmlsortorder !!}
                                    </select>
                                    @error('sort_order')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                        <div class="col-md-12 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Show</option>
                                <option value="0">Hide</option>
                            </select>
                            @error('pricesale')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button
                                class="btn btn-primary w-100"
                                type="submit"
                            >
                                Add menu
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </section>
  </div>@endsection