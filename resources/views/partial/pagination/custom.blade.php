@if ($paginator->hasPages())
    <div class="flex flex-col items-center my-12">
        <div class="flex items-center">
            @if ($paginator->onFirstPage())
            <a  class="h-4 w-4 mr-1 opacity-50 flex justify-center items-center rounded-full bg-gray-200">
                <i class='bx bx-left-arrow-alt'></i>
            </a>
            @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="h-4 w-4 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                <i class='bx bx-left-arrow-alt'></i>
            </a>
            @endif
            <div class="flex items-center h-4 font-medium rounded-full bg-gray-200">
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <div class="w-4 md:flex justify-center items-center  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full ">{{ $element }}</div>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                <div class="w-4 md:flex justify-center items-center cursor-pointer leading-5 transition duration-150 ease-in rounded-full bg-red-400  text-center text-white"><span class="text-xs">{{ StrHelp::enToFa($page) }}</span></div>
                                @else
                                    <a href="{{ $url }}" class="w-4 md:flex text-center justify-center items-center cursor-pointer leading-5 transition duration-150 ease-in  rounded-full text-xs ml-1 mr-1">{{ StrHelp::enToFa($page) }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
            </div>

            @if ($paginator->hasMorePages())
            <a  href="{{ $paginator->nextPageUrl() }}" rel="next" class="h-4 w-4 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            @else
            <a  class="h-4 w-4 mr-1 opacity-50 flex justify-center items-center rounded-full bg-gray-200">
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            @endif
        </div>
    </div>
@endif

{{-- <div class="flex flex-col items-center my-12">
    <div class="flex text-gray-700">
        <button disabled class="h-8 w-8 mr-1 disabled:opacity-50 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>
        <div class="flex h-8 font-medium rounded-full bg-gray-200">
            <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">1</div>
            <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">...</div>
            <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">3</div>
            <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full bg-pink-600 text-white ">4</div>
            <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">5</div>
            <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">...</div>
            <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">15</div>
            <div class="w-8 h-8 md:hidden flex justify-center items-center cursor-pointer leading-5 transition duration-150 ease-in rounded-full bg-pink-600 text-white">4</div>
        </div>
        <div class="h-8 w-8 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </div>
</div> --}}