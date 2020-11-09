


@extends('layouts.master')

@section('title') Dashboard @endsection

@section('content')


@component('common-components.breadcrumb')
    @slot('title') Dashboard  @endslot
        @slot('li_1') Welcome to Hyphen Plus Dashboard @endslot
        @endcomponent

       

            @endsection