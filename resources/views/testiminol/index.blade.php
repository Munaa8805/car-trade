@extends('layouts.app')
@section('content')
<div class="w-full">
    <h1 class=" text-3xl font-bold text-center text-clifford">
        Our Testimonial and Comments
    </h1>
    <div>
        <form>
            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">New Testimonial Comment</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="profession" class="block text-sm/6 font-medium text-gray-900">Profession</label>
                            <div class="mt-2">
                                <input type="text" name="profession" id="profession" autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>



                        <div class="col-span-full">
                            <label for="comment" class="block text-sm/6 font-medium text-gray-900">
                                Comment</label>
                            <div class="mt-2">
                                <input type="text" name="comment" id="comment" autocomplete="comment"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </form>
    </div>
    <div class="flex flex-wrap gap-4 justify-center bg-green-400">
        @forelse ($testiminols as $testimonial)
        <div class="min-w-sm max-w-sm bg-white p-4 rounded-lg border border-gray-200 shadow-md dark:text-white
        dark:bg-gray-800 dark:border-gray-700 relative">
            <img class="bg-light rounded-circle p-2 mx-auto mb-3" src='img/testimonial-<?php echo rand(1,4)?>.jpg' />
            <div class="text-center">
                <h5 class="">{{
                    $testimonial->name}}</h5>
                <p>{{
                    $testimonial->profession}}</p>
                <div class="text-center">
                    <p>{{$testimonial->comment}}</p>
                </div>
            </div>
            <div class="flex justify-between items-start mt-4 cursor-pointer w-full">
                <div class="flex items-center"><a href="{{route('testiminols.show', $testimonial)}}"
                        class="bg-green-400 text-white text-sm px-4 py-2 rounded-2xl ">Edit</a></div>
                <div class="flex items-center">
                    <form method="POST" action="{{route('testiminols.destroy', $testimonial->id)}}"
                        onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-400 text-white text-sm px-4 py-2 rounded-2xl">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p>No Test available</p>
        @endforelse
    </div>
</div>