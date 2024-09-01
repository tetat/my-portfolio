@extends('layouts.app')

@section('content')

    <section class="pt-10 pb-10 lg:pb-20">
    <div class="container px-2">
        <div class="flex flex-wrap -mx-4">
            @foreach($projects as $project)
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-white rounded-lg overflow-hidden mb-10">
                    <img
                        src="{{asset($project['img_url'])}}"
                        alt="image"
                        class="w-full"
                        />
                    <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                        <h3>
                            <a
                                href="javascript:void(0)"
                                class="
                                font-semibold
                                text-dark text-xl
                                sm:text-[22px]
                                md:text-xl
                                lg:text-[22px]
                                xl:text-xl
                                2xl:text-[22px]
                                mb-4
                                block
                                hover:text-primary
                                "
                                >
                            {{$project['title']}}
                            </a>
                        </h3>
                        <p class="text-base text-body-color leading-relaxed mb-7">
                            {{$project['description']}}
                        </p>
                        <a
                            href="{{asset($project['github_url'])}}"
                            class="
                            inline-block
                            py-2
                            px-7
                            border border-[#E5E7EB]
                            rounded-full
                            text-base text-body-color
                            font-medium
                            hover:border-primary hover:bg-primary hover:text-indigo
                            transition
                            "
                            target="_blank"
                            >
                        GitHub
                        </a>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

@endsection