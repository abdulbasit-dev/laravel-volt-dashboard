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
        <a href="{{ route('subscribers.index') }}"
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
                <form action="{{ route('subscribers.update', $subscriber->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <div class="col-lg-7 col-sm-6">
                            <fieldset class="mt-3">
                                <legend>Personal Inforamtion</legend>
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="name">Full Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name"
                                        value="{{ old('name', $subscriber->name) }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="nid">National ID</label>
                                    <input type="text"
                                        class="form-control @error('nid') is-invalid @enderror"
                                        id="nid" name="nid"
                                        value="{{ old('nid', $subscriber->nid) }}">
                                    @error('nid')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="email">Email Address</label>
                                    <input type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email" value="{{ old('email', $subscriber->email) }}">
                                    @error('email')
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
                                        value="{{ old('phone_number', $subscriber->phone_number) }}">
                                    @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="phone_number_alt">Phone Number (Alternative)</label>
                                    <input type="tel" class="form-control" id="phone_number_alt"
                                        name="phone_number_alt"
                                        value="{{ old('phone_number_alt', $subscriber->phone_number_alt) }}">
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <!-- End of Form -->

                            </fieldset>

                        </div>



                        <div class="col-lg-7 col-sm-6">
                            <fieldset class="mt-3">
                                <legend>Addess Inforamtion</legend>
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="property_name">Property Name/Address</label>
                                    <input type="text"
                                        class="form-control @error('property_name') is-invalid @enderror"
                                        id="property_name" name="property_name"
                                        value="{{ old('property_name', $address->property_name) }}">
                                    @error('property_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="property_number">Property Number</label>
                                    <input type="text"
                                        class="form-control @error('area') is-invalid @enderror"
                                        id="property_number" name="property_number"
                                        value="{{ old('property_number', $address->property_number) }}">
                                    @error('property_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="area">Area</label>
                                    <input type="text"
                                        class="form-control @error('area') is-invalid @enderror"
                                        id="area" name="area"
                                        value="{{ old('area', $address->area) }}">
                                    @error('area')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label class="me-2 my-1" for="city">City</label>
                                    <select class="form-select @error('city') is-invalid @enderror"
                                        id="city" name="city">
                                        <option value>Select City</option>
                                        @foreach ($cities as $key => $value)
                                        <option value="{{ $value }}"
                                            @selected($value==old("city","Erbil"))>{{
                                            $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="mb-4">
                                    <label class="me-2 my-1" for="zone">Zone</label>
                                    <select class="form-select @error('zone') is-invalid @enderror"
                                        id="zone" name="zone">
                                        <option value>Select Zone</option>
                                        @foreach ($zones as $key => $value)
                                        <option value="{{ $key }}" @selected($key==old("zone", $subscriber->zone_id ))>{{
                                            $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('zone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->
                            </fieldset>

                            <!-- Radio -->
                            <fieldset>
                                <legend>Connection Information</legend>

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="ampere">Ampere</label>
                                    <input type="number"
                                        class="form-control @error('ampere') is-invalid @enderror"
                                        min="2" max="40" id="ampere" name="ampere"
                                        value="{{ old('ampere', $subscriber->ampere) }}">
                                    @error('ampere')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_active"
                                        id="exampleRadios2" value="0"
                                        @checked($subscriber->is_active == 0)>
                                    <label class="form-check-label" for="exampleRadios2">
                                        InActive
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_active"
                                        id="exampleRadios1" value="1"
                                        @checked($subscriber->is_active == 1)>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Active
                                    </label>
                                </div>

                                <!-- End of Radio -->
                            </fieldset>


                        </div>
                    </div>
                    <button class="btn btn-gray-800 col-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection