@extends('template')
@section('main')
    <div class="page-title">
        <h1 class="font-semibold text-4xl uppercase">jas</h1>
    </div>

    @foreach ($jases as $jas)
        <div class="p-8">
            <div class="flex shadow-lg rounded-lg p-6">
                <div class="project-img">
                    <img src="../assets/jas{{ $loop->iteration }}.png" alt="" />
                </div>
                <div class="relative w-full py-4">
                    <h3 class="text-xl font-normal">{{ $jas->nama }}</h3>
                    <p>Rp{{ $jas->harga }}</p>
                    <div class="absolute right-0 top-0 bottom-0 flex flex-col justify-center px-6 py-10 gap-3">
                        @if ($jas->s)
                            <button onclick="size('s-{{ $jas->id }}')"
                                class="border-2 border-blue-600 py-2 px-4 rounded text-blue-600 active:bg-blue-600 active:text-slate-100 transition uppercase">s</button>
                        @else
                            <button
                                class="border-2 border-blue-800 py-2 px-4 rounded bg-blue-800 text-slate-200 cursor-not-allowed uppercase">s</button>
                        @endif

                        @if ($jas->m)
                            <button onclick="size('m-{{ $jas->id }}')"
                                class="border-2 border-blue-600 py-2 px-4 rounded text-blue-600 active:bg-blue-600 active:text-slate-100 transition uppercase">m</button>
                        @else
                            <button
                                class="border-2 border-blue-800 py-2 px-4 rounded bg-blue-800 text-slate-200 cursor-not-allowed uppercase">m</button>
                        @endif

                        @if ($jas->l)
                            <button onclick="size('l-{{ $jas->id }}')"
                                class="border-2 border-blue-600 py-2 px-4 rounded text-blue-600 active:bg-blue-600 active:text-slate-100 transition uppercase">l</button>
                        @else
                            <button
                                class="border-2 border-blue-800 py-2 px-4 rounded bg-blue-800 text-slate-200 cursor-not-allowed uppercase">l</button>
                        @endif

                        @if ($jas->xl)
                            <button onclick="size('xl-{{ $jas->id }}')"
                                class="border-2 border-blue-600 py-2 px-4 rounded text-blue-600 active:bg-blue-600 active:text-slate-100 transition uppercase">xl</button>
                        @else
                            <button
                                class="border-2 border-blue-800 py-2 px-4 rounded bg-blue-800 text-slate-200 cursor-not-allowed uppercase">xl</button>
                        @endif
                    </div>
                    <button onclick="addToKeranjang({{ $jas->id }})"
                        class="border-2 border-transparent rounded-lg bg-blue-600 text-white fill-white py-2 px-4 flex items-center gap-1 absolute bottom-5 hover:fill-blue-600 hover:text-blue-600 hover:border-blue-600 hover:bg-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                        </svg>
                        Keranjang
                    </button>
                </div>
            </div>
        </div>
    @endforeach
@endsection
