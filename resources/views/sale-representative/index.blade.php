@extends("layouts.app")
@section('title', $title ?? null)
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-end py-4">
    <div class="d-block mb-4 mb-md-0">
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
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
        <h2 class="h4">{{ $title }} List</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('sale-representatives.create') }}"
            class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            New {{ singular($title) }}
        </a>
        <div class="btn-group ms-2 ms-lg-3">
            <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
            <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
        </div>
    </div>
</div>


<div class="card card-body table-wrapper table-responsive border-0 shadow">
    <div class="table-responsive">
        <table class="user-table table-hover align-items-center table">
            <thead>
                <tr>
                    <th class="border-bottom">#</th>
                    <th class="border-bottom">Name</th>
                    <th class="border-bottom">Phone Number</th>
                    <th class="border-bottom">No. Subscribers</th>
                    <th class="border-bottom">Email</th>
                    <th class="border-bottom">Date Created</th>
                    <th class="border-bottom">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($saleRepresentatives as $user)

                <tr>
                    <td><span class="fw-normal">{{ $loop->iteration }}</span></td>
                    <td>

                        <a href="{{ route('sale-representatives.show',$user) }}"
                            class="d-flex align-items-center">
                            <img src="{{ getFile($user) }}"
                                class="avatar rounded-circle me-3" alt="Avatar">
                            <div class="d-block">
                                <span class="fw-bold">{{ $user->name }}</span>
                            </div>
                        </a>
                    </td>
                    <td><span class="fw-normal">{{ $user->phone_number }}</span></td>
                    </td>
                    <td><span class="fw-normal">{{ rand(1,100) }}</span></td>
                    </td>
                    <td><span class="fw-normal">{{ $user->email }}</span></td>

                    <td><span class="fw-normal">{{ $user->created_at->format('d M Y')
                            }}</span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button
                                class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div
                                class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">

                                <a class="dropdown-item text-primary d-flex align-items-center"
                                    href="{{ route('sale-representatives.show', $user->id) }}">
                                    <span class="fas fa-eye me-2"></span>
                                    Show Sale Sepresentative
                                </a>

                                <a class="dropdown-item text-info d-flex align-items-center"
                                    href="{{ route('sale-representatives.edit', $user->id) }}">
                                    <span class="fas fa-user-edit me-2"></span>
                                    Edit Sale Sepresentative
                                </a>

                                <form action="{{ route('sale-representatives.destroy', $user->id) }}"
                                    method="POST" id="myForm_{{ $user->id }}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <a class="dropdown-item text-danger rounded-bottom" href="#"
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
                                                ">
                                    <span class="fas fa-user-times me-2"></span>Delete
                                    Sale Sepresentative</a>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $saleRepresentatives->links() }}
    </div>
</div>
@endsection