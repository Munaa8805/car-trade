@extends('layouts.app')
@section('content')

<h1>{{
    $title}}</h1>
<div class="basic-1/4 max-w-sm bg-white p-4 rounded-lg border border-gray-200 shadow-md dark:text-white
        dark:bg-gray-800 dark:border-gray-700 relative">
    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src='img/testimonial-<?php echo rand(1,4)?>.jpg' />
    <div class="text-center">
        <h5 class="">{{
            $testiminol->name}}</h5>
        <p>{{
            $testiminol->profession}}</p>
        <div class=" text-center">
            <p class="">{{$testiminol->comment}}</p>
        </div>
    </div>
    <div class="flex justify-between mt-4 items-start cursor-pointer w-full ">
        <div class="flex items-center">
            <a href="{{route('testiminols.edit', $testiminol)}}"
                class="bg-green-400 text-white text-sm px-4 py-2 rounded-2xl">Edit</a>
        </div>
        <div class="flex items-center">
            <form method="POST" action="{{route('testiminols.destroy', $testiminol->id)}}"
                onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-400 text-white text-sm px-4 py-2 rounded-2xl">Delete</button>
            </form>
        </div>
    </div>
</div>