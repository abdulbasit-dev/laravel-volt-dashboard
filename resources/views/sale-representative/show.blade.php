@extends("layouts.app")
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
                <li class="breadcrumb-item active" aria-current="page">Show</li>
            </ol>
        </nav>
        <h2 class="h4">{{ singular($title) }} Information</h2>
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
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">

            <div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <h5 class="text-muted">#ID:</h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-primary">{{ $user->id }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <h5 class="text-muted">Full Name:</h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-primary fw-bolder">{{ $user->name }}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <h5 class="text-muted">Email:</h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-primary">{{ $user->email?? "---"}}</h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <h5 class="text-muted">Phone Number:</h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-primary">{{ $user->phone_number }}</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow border-0 text-center p-0">
                    <div wire:ignore.self="" class="profile-cover rounded-top"
                        data-background="../assets/img/profile-cover.jpg"
                        style="background: url(&quot;../assets/img/profile-cover.jpg&quot;);"></div>
                    <div class="card-body pb-5">
                        <img src="{{ getFile($user)}}"
                            class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                        <h4 class="h3">
                            {{$user->name }}
                        </h4>
                        <h5 class="fw-normal">{{$user->phone_number }}</h5>
                        <div class="d-inline-flex align-items-center mt-3">
                            <div>
                                <a class="btn btn-outline-info me-3"
                                    href="{{ route('sale-representatives.edit',$user) }}">Edit</a>
                            </div>
                            <div>
                                <form action="{{ route('sale-representatives.destroy', $user->id) }}"
                                    method="POST" id="myForm_{{ $user->id }}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <a class="btn btn-outline-danger" href="javasript:void()"
                                    onclick="Swal.fire({
                                                                                            title: 'Are you sure?',
                                                                                            text: `You won't be able to revert this!`,
                                                                                            icon: 'warning',
                                                                                            showCancelButton: true,
                                                                                            confirmButtonText: 'Yes, delete it'
                                                                                            }).then((result) => {
                                                                                            if (result.isConfirmed) {
                                                                                            document.getElementById('myForm_{{ $user->id }}').submit();
                                                                                                                    }
                                                                                            })
                                                                                        ">Delete</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection