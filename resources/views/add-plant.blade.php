@extends('layouts.master')
@section('title','Home')
@section('content')
    <div
        class="min-h-screen flex flex-col items-center justify-center bg-gray-100"
    >
        <div
            class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        "
        >
            <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
                New Plant Info
            </div>
            <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
                Enter details for plant
            </div>

            <div class="mt-10">
                <form method="POST" action="{{route('plants.store')}}" id="add_plant_form" enctype="multipart/form-data">
                    @csrf
                    <div class="\flex flex-col mb-5">
                        <label
                            for="email"
                            class="mb-1 text-xs tracking-wide text-gray-600"
                        >Name:</label
                        >
                        <div class="relative">
                            <div
                                class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                            >
                                <i class="fas fa-user text-blue-500"></i>
                            </div>

                            <input
                                id="name"
                                type="text"
                                name="name"
                                class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                                placeholder="Enter plant name"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-5">
                        <label
                            for="species"
                            class="mb-1 text-xs tracking-wide text-gray-600"
                        >Species:</label
                        >
                        <div class="relative">
                            <div
                                class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                            >
                                <i class="fas fa-at text-blue-500"></i>
                            </div>

                            <input
                                id="species"
                                type="text"
                                name="species"
                                class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                                placeholder="Enter species of plant"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-6">
                        <div class="relative">
                        </div>
                    </div>
                    <div class="flex flex-col mb-5">
                        <label
                            for="species"
                            class="mb-1 text-xs tracking-wide text-gray-600"
                        >Watering Instructions:</label
                        >
                        <div class="relative">
                            <div
                                class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                            >
                                <i class="fas fa-at text-blue-500"></i>
                            </div>
                            <textarea
                                class="text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400"
                                rows="3"
                                name="watering_inst"
                                form="add_plant_form"
                                placeholder="Enter instructions here ..."
                            ></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col mb-5">
                        <div class="relative">
                            <div
                                class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                            >
                                <i class="fas fa-at text-blue-500"></i>
                            </div>

                            <input
                                id="photo"
                                type="file"
                                name="photo"
                                class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                                placeholder="Upload image"
                            />
                        </div>
                    </div>

                    <div class="flex w-full">
                        <button
                            type="submit"
                            class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-blue-500
                  hover:bg-blue-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                "
                        >
                            <span class="mr-2 uppercase">Add Plant</span>
                            <span>
                  <svg
                      class="h-6 w-6"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                  >
                    <path
                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

