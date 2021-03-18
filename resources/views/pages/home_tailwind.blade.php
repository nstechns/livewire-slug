@extends('layouts.tailwind')

@section('content')
<h2 class="font-bold text-2xl">Slug: Tailwind Layout</h2>
<div class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
@livewire('posts')
</div>
@endsection
