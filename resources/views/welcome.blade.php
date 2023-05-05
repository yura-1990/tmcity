@extends('app.app')

@section('content')

<!-- END SECTION HEADINGS -->

@include('home.allActivity', ['allActivities'=> $allActivities])

@include('home.news', ['news'=> $news])

@include('home.result', ['institutions'=> $institutions])

@include('home.services', ['services'=> $services, 'serviceItems' => $serviceItems])

@endsection
