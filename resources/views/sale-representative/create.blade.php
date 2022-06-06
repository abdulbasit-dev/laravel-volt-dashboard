@extends('layouts.app')
@section('title', $title ?? null)
@section('content')
{{-- header --}}
<div class="d-flex justify-content-between flex-md-nowrap align-items-center flex-wrap py-4">
    <div class="d-block mb-md-0 mb-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ $title }}</li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        <h2 class="h4">Create New {{ singular($title) }}</h2>
    </div>
    <div class="btn-toolbar mb-md-0 mb-2">
        <a href="{{ route('sale-representatives.index') }}"
            class="btn btn-sm btn-warning d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Go Back
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card components-section border-0 shadow">
            <div class="card-body">
                <form action="{{ route('sale-representatives.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-7 col-sm-6">

                            <!-- Form -->
                            <div class="mb-4">
                                <label for="name">Full Name</label>
                                <input type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End of Form -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label for="phone_number">Phone Number</label>
                                <input type="tel"
                                    class="form-control @error('phone_number') is-invalid @enderror"
                                    id="phone_number" name="phone_number"
                                    value="{{ old('phone_number') }}">
                                @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End of Form -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Email Address</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email" value="{{ old('email') }}" name="email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End of Form -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label for="password">Password</label>
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End of Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End of Form -->
                        </div>

                    </div>
                    <button class="btn btn-gray-800 col-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection