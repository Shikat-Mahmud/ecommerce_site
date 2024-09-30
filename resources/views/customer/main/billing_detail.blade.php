@extends('customer.layouts.master')
@section('title', 'Billing Details')
@push('styles')
    <style>
        .desc-box {
            max-width: 250px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
        }
    </style>
@endpush
@section('content')
<section class="pc-container">
    <div class="pc-content">
                
        <form action="{{ isset($billingDetail) ? route('update.profile.billing', $billingDetail->id) : route('store.profile.billing') }}" method="POST">
            @csrf
            @if(isset($billingDetail))
                @method('PUT')
            @endif

            <div class="card">
                <div class="card-header text-center">
                    <h4>Billing Details</h4>
                    <p class="mt-1 text-sm text-gray-600">
                        Save or update your billing address for product delivery.
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="fname" class="mb-2">First Name <span class="text-danger">*</span></label>
                                <input id="fname" name="fname" type="text" class="form-control"
                                    value="{{ isset($billingDetail->fname) ? old('fname', $billingDetail->fname) : '' }}" required autofocus autocomplete="fname" placeholder="Your First Name" />
                                <x-input-error class="mt-2" :messages="$errors->get('fname')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="lname" class="mb-2">Last Name </label>
                                <input id="lname" name="lname" type="text" class="form-control"
                                    value="{{ isset($billingDetail->lname) ? old('lname', $billingDetail->lname) : '' }}" autofocus autocomplete="lname" placeholder="Your Last Name" />
                                <x-input-error class="mt-2" :messages="$errors->get('lname')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="email" class="mb-2">Email </label>
                                <input id="email" name="email" type="email" class="form-control"
                                    value="{{ isset($billingDetail->email) ? old('email', $billingDetail->email) : '' }}" autofocus autocomplete="email" placeholder="Your Email" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="phone" class="mb-2">Phone No <span class="text-danger">*</span></label>
                                <input id="phone" name="phone" type="text" class="form-control"
                                    value="{{ isset($billingDetail->phone) ? old('phone', $billingDetail->phone) : '' }}" required autofocus autocomplete="phone" placeholder="Your Phone No" />
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="address" class="mb-2">Address <span class="text-danger">*</span></label>
                                <input id="address" name="address" type="text" class="form-control"
                                    value="{{ isset($billingDetail->address) ? old('address', $billingDetail->address) : '' }}" required autofocus autocomplete="address" placeholder="Your Address" />
                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="city" class="mb-2">City <span class="text-danger">*</span></label>
                                <input id="city" name="city" type="text" class="form-control"
                                    value="{{ isset($billingDetail->city) ? old('city', $billingDetail->city) : '' }}" required autofocus autocomplete="city" placeholder="Your City" />
                                <x-input-error class="mt-2" :messages="$errors->get('city')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="state" class="mb-2">State </label>
                                <input id="state" name="state" type="text" class="form-control"
                                    value="{{ isset($billingDetail->state) ? old('state', $billingDetail->state) : '' }}" autofocus autocomplete="state" placeholder="Your State" />
                                <x-input-error class="mt-2" :messages="$errors->get('state')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <lable for="postal_code" />
                                <label for="postal_code" class="mb-2">Postal Code <span class="text-danger">*</span></label>
                                <input id="postal_code" name="postal_code" type="text" class="form-control"
                                    value="{{ isset($billingDetail->postal_code) ? old('postal_code', $billingDetail->postal_code) : '' }}" required autofocus autocomplete="postal_code" placeholder="Your postal_code" />
                                <x-input-error class="mt-2" :messages="$errors->get('postal_code')" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 form-group">
                                <label for="country" class="mb-2">Country <span class="text-danger">*</span></label>
                                <select id="country" name="country" class="form-control" required autofocus>
                                    <option value="">Select your country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country }}" {{ isset($billingDetail->country) && $billingDetail->country == $country ? 'selected' : '' }}>
                                            {{ $country }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('country')" />
                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <button class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</section>
@endsection