@extends('adminlte::page')


@section('content')
  <!-- Le composant app/Http/Livewire/CountriesCitiesSelect.php -->
  @livewire("countries-cities-select")

  <!-- Scripts livewire -->
  @livewireScripts()
@endsection