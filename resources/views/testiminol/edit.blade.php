@extends('layouts.app')
@section('content')

<h1>Edit</h1>
<div class="container mx-auto">
    <form method="POST" action="{{ route('testiminols.update', $testiminol->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" value="{{ $testiminol->name }}" class="input" required>
        </div>
        <div class="mb-4">
            <label for="profession" class="block text-gray-700 text-sm font-bold mb-2">Profession:</label>
            <input type="text" name="profession" id="profession" value="{{ $testiminol->profession }}" class="input"
                required>
        </div>
        <div class="mb-4">
            <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Comment:</label>
            <textarea name="comment" id="comment" rows="4" class="input" required>{{ $testiminol->comment }}</textarea>
        </div>
        <button type="submit"
            class="btn bg-green-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
    </form>