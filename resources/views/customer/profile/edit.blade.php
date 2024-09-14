@extends('customer.layouts.master')
@section('title', 'Customer Profile Setting')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            @include('customer.profile.partials.update-profile-information-form')
            @include('customer.profile.partials.update-password-form')
            <br>
        </div>
    </section>
@endsection
