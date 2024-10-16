@extends('web.app.app')


@section('main-body')
<!-- Page Title -->
<div class="bread-crumb">
    <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>Contact Us</span> </h2>

        </div>
    </div>
</div>
<!-- End Page Title -->
<div class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <h4>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    Contact us
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                </h4>

            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="address">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icon_map_alt"></i>
                        {{ $content->website_address }}
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-envelope"></i>
                        {{ $content->website_email }}
                    </div>
                    <div class="col-md-4">
                        <i class="icon_mobile"></i>
                        {{ $content->website_phone }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="map">

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.10963419996773!2d90.42114801472312!3d23.82733997431353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c76fea37ad9f%3A0x85832c78160d81ed!2sHappy%20Double%20Glazing%20Solution!5e0!3m2!1sbn!2sbd!4v1729097625307!5m2!1sbn!2sbd"></iframe>
</div>
@endsection
