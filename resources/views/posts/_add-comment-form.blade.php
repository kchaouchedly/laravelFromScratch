
@auth()
    <x-panel>


        <form action="/posts/{{$post->slug}}/comments" method="post" >
            @csrf
            <header class="flex items-center">

                <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">

                <H2 class="ml-4">Want to Participate  ?? </H2>

            </header>
            <div class="mt-6">
                            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring "
                                      rows="5" placeholder="Put your Comment ! "
                                      required ></textarea>
                @error('body')
                <span class="text-xs text-red-500">
                                        {{$message}}
                                    </span>
                @enderror



            </div>
            <div class="flex justify-end mt-6 pt-6
border-t border-gray-200 ">
<x-submit-button>POST</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/login"> Login To Comment </a>
        OR
        <a href="/register"> Register To Comment </a>

    </p>
@endauth
