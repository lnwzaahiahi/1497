@extends('layouts.master')

@section('title') Starter Page @endsection

@section('content')

   @component('common-components.breadcrumb')
         @slot('title') Setting @endslot
         @slot('li_1') Setting @endslot
         @slot('li_2') Setting @endslot
     @endcomponent         

@endsection