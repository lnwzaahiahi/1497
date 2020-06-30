@extends('layouts.master')

@section('title') Starter Page @endsection

@section('content')

   @component('common-components.breadcrumb')
         @slot('title') Profile Setting @endslot
         @slot('li_1') Setting @endslot
         @slot('li_2') Profile Setting @endslot
     @endcomponent         

@endsection