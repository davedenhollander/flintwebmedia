@extends('layouts.app')

@section('content')
    <section id="home--banner">
        <div class="wrapper">
            <img class="midres animated fadeIn" src="{{ asset('img/logo.svg') }}"/>
        </div>

        <a href="#" style="background: url('{{ asset('img/sprites/cta_button.svg') }}'); background-size: cover;" class="cta material-button animated fadeInUpBig">Contact opnemen met Flint</a>

        <div class="origami" style="background-image('{{ asset('img/origami.png') }}')"></div>
    </section>

    <div class="container">
        <div class="shift-up-wrapper">
            <div class="card container shift-up">
                <div id="home--introduction" class="wow slideInLeft">
                    <div class="container">
                        <h3 class="text-center" id="quote"><b>Inzet, inzicht & waarde</b></h3>
                        <p class="lead text-center" id="quote">
                            “Wat het brein kan bedenken, kan ook worden bereikt."
                        </p>
                        <div class="text-right" style="margin-right: 8%"><small><em>Napoleon Hill</em></small></div>
                    </div>
                </div>
            </div>
        </div>

        <section id="home--portfolio">
            <div class="inner">
                <div class="card">
                    <ul class="portfolio-items">
                        <li class="portfolio-item active">
                            <div class="portfolio-item-header">
                                <span class="portfolio-item-icon">
                                    <i class="fa fa-user-circle-o"></i>
                                </span>
                                <span class="portfolio-item-title">Autodemontagemusse.nl</span>
                                <span class="portfolio-item-action">
                                    <i class="fa fa-caret-down"></i>
                                </span>
                            </div>

                            <div class="portfolio-item-block-wrapper">
                                <div class="portfolio-item-block" style="background-image: url('{{ asset('img/project_snaps/kleinecampings.png') }}')">
                                    <p>
                                        Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.Lorem upsum.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item">
                            <div class="portfolio-item-header">
                                <span class="portfolio-item-icon">
                                    <i class="fa fa-user-circle-o"></i>
                                </span>
                                <span class="portfolio-item-title">Kleinecampings.nl</span>
                                <span class="portfolio-item-action">
                                    <i class="fa fa-caret-down"></i>
                                </span>
                            </div>

                            <div class="portfolio-item-block">

                            </div>
                        </li>
                        <li class="portfolio-item">
                            <div class="portfolio-item-header">
                                <span class="portfolio-item-icon">
                                    <i class="fa fa-user-circle-o"></i>
                                </span>
                                <span class="portfolio-item-title">Houtkubus.nl</span>
                                <span class="portfolio-item-action">
                                    <i class="fa fa-caret-down"></i>
                                </span>
                            </div>

                            <div class="portfolio-item-block">

                            </div>
                        </li>
                    </ul>
                </div>

                <!--
                <h2 class="headline text-center cartoon-shadow">Portfolio</h2>
                <div class="portfolio-previews">
                    <div class="portfolio-preview card">
                        <img src="{{ asset('img/project_snaps/kleinecampings-1.png') }}">
                    </div>
                    <div class="portfolio-preview card">
                        <img src="{{ asset('img/project_snaps/houtkubus-1.png') }}">
                    </div>
                    <div class="portfolio-preview card">
                        <img src="{{ asset('img/project_snaps/autodemontagemusse-1.png') }}">
                    </div>
                </div>

                <div class="top-padding card">
                    <div class="container">
                        <div class="flex-center">
                            <div class="wrapper">
                                <div class="device-wrapper device-phone">
                                    <div style="background-image: url('{{ asset('img/project_snaps/kleinecampings.png') }}')"></div>
                                    <img src="{{ asset('img/devices/iPhone.png') }}" alt="iphone-device-frame">
                                </div>

                                <div class="device-wrapper device-notebook">
                                    <div style="background-image: url('{{ asset('img/project_snaps/kleinecampings.png') }}')"></div>
                                    <img src="{{ asset('img/devices/macbook.png') }}" alt="macbook-device-frame">
                                </div>

                                <div class="device-wrapper device-tablet">
                                    <div style="background-image: url('{{ asset('img/project_snaps/kleinecampings.png') }}')"></div>
                                    <img src="{{ asset('img/devices/ipad.png') }}" alt="ipad-device-frame">
                                </div>
                            </div>
                        </div>
                        <h3 class="subheading text-center">Kleinecampings.nl</h3>
                    </div>
                </div>
                -->

            </div>
        </section>

        <section id="">
            <div class="inner">
                <h2 class="headline text-center cartoon-shadow">Nieuws</h2>
            </div>
        </section>
    </div>
@endsection

@section('stylesheets')
    <link href="{{ asset('css/pages/home.css') }}" rel='stylesheet' type='text/css'>
@endsection

@section('scripts')
    <script src="{{ asset('js/pages/home.js') }}"></script>
@endsection