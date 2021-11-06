@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .divider::after, .divider::before {
            height: 0.01rem;
            background-color: #c1c1c1;
        }

        button.likeButton svg {
            transition: transform .1s ease-in;
        }

        button.likeButton svg path {
            fill: #E4565E;
            fill-opacity: 0;
            stroke: #1f2937;
            stroke-width: 12px;
            transition: fill-opacity .1s ease-in;
            transition: stroke-opacity .1s ease-in;
        }

        .likeButton:hover svg path {
            fill-opacity: 1;
            stroke-opacity: 0;
        }

        .likeButton:hover svg {
            transform: scale(1.5);
        }

        .collapse-arrow .collapse-title:after {
           content: none;
        }

        #menu-toggle + div svg {
            transition: transform .2s ease-in;
        }

        #menu-toggle:checked + div svg{
            transform: rotate(180deg);
        }

        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #f5f5f5;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #ccc;  
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #999;  
        }
    </style>
@endsection
@section('header')
    <header class="py-2 flex top-0 items-center justify-between">
        <a href="#" class="flex items-center gap-2">
            <h1 class="text-xl font-bold">Masyuk</h1>
        </a>
        <nav class="flex gap-4">
            @if (!Auth::check())
                <a href="#login" class="btn btn-primary btn-rh py-2.5 w-20">Login</a>
                <a href="#signup" class="btn btn-outline btn-primary btn-rh py-2.5 w-20">Signup</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-rh py-2.5 w-20">Logout</button>
                </form>
            @endif
        </nav>
    </header>
@endsection
@section('main')
    <main class="py-4 grid grid-cols-4 gap-4">
        <div class="content w-full col-span-3">
            <article class="bg-base-200 py-8 px-10 rounded-2xl h-screen">
                <section class="flex gap-4 h-1/2">
                    {{-- Video --}}
                    <iframe class="h-full w-3/4 rounded-2xl" src="https://www.youtube.com/embed/QwG1Jj23Zts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{-- Foto --}}
                    <div class="h-full w-1/4 flex flex-col gap-4">
                        <div class="h-1/2 w-full bg-no-repeat bg-cover bg-center rounded-2xl" style='background-image: url("https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg")'></div>
                        <div class="h-1/2 w-full bg-no-repeat bg-cover bg-center rounded-2xl" style='background-image: url("https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg")'></div>
                    </div>
                </section>
                <section class="mt-6">
                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-3xl w-3/4">Ayam Goreng</h2>
                        <button class="btn btn-outline btn-primary w-1/4">Simpan</button>
                    </div>
                    <div class="flex gap-6 mt-2">
                        <button class="flex gap-2 justify-center items-center cursor-default">
                            <i class='bx bxs-timer text-3xl' ></i>
                            <span class="text-sm">60 Menit</span>
                        </button>
                        <button class="flex gap-2 justify-center items-center likeButton">
                            <svg width="22" height="22" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path id="heart" d="m 31,11.375 c -14.986319,0 -25,12.30467 -25,26 0,12.8493 7.296975,23.9547 16.21875,32.7188 8.921775,8.764 19.568704,15.2612 26.875,19.0312 a 2.0002,2.0002 0 0 0 1.8125,0 c 7.306296,-3.77 17.953225,-10.2672 26.875,-19.0312 C 86.703025,61.3297 94,50.2243 94,37.375 c 0,-13.69533 -10.013684,-26 -25,-26 -8.834204,0 -14.702885,4.50444 -19,10.59375 C 45.702885,15.87944 39.834204,11.375 31,11.375 z"/>

                                    <clipPath id="insideHeartOnly">
                                    <use xlink:href="#heart"/>
                                    </clipPath>
                                </defs>

                                <use
                                    xlink:href="#heart"
                                    stroke-width="10" stroke="red" fill="none"
                                clip-path="url(#insideHeartOnly)"/>
                            </svg>
                            
                            <span class="text-sm">102 Suka</span>
                        </button>
                        <a href="#comment" class="flex gap-2 justify-center items-center">
                            <i class="bi bi-chat-dots-fill text-xl"></i>
                            <span class="text-sm">10 Komentar</span></a>
                        <button class="flex gap-2 justify-center items-center cursor-default">
                            <i class='bx bxs-bookmark text-2xl' ></i>
                            <span class="text-sm">20 Simpan</span>
                        </button>
                    </div>
                    <div class="w-full mt-2">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio similique recusandae eveniet ad explicabo natus, ipsum exercitationem magnam est provident omnis inventore numquam voluptates quaerat dolorem deserunt tempore consequuntur corrupti ut, nisi, velit atque iste ducimus aspernatur. Alias quia vero corporis iste rem ut sint! Repellat est iste qui repudiandae.</p>
                    </div>
                    <div class="divider"></div>
                    <div class="flex justify-between items-center mt-2">
                        <a href="#" class="flex gap-2 items-center w-3/4">
                            <img src="https://i.insider.com/5ca389adc6cc503c5a53fd96?width=500&format=jpeg&auto=webp" class="mask mask-circle w-16">
                            <p class="font-bold text-lg">John Donald</p>
                        </a>
                        <button class="btn btn-outline btn-primary w-1/4"><i class='bx bx-plus'></i> Ikuti</button>
                    </div> 
                </section>
            </article>
            <article class="bg-base-200 py-8 px-10 rounded-2xl mt-4">
                <h3 class="font-bold text-2xl mb-4">Bahan Masakan</h3>
                <ul class="list-disc px-6">
                    <li>1/2 ekor ayam</li>
                    <li>1 lembar daun salam</li>
                    <li>1 batang serai memarkan</li>
                    <li>2 sendok makan penyedap rasa</li>
                    <li>400 ml air</li>
                    <li>2 sendok makan garam</li>
                    <li>1/2 sendok teh gula pasir</li>
                    <li>350 ml Minyak Goreng</li>
                </ul>
            </article>
            <article class="collapse w-full collapse-arrow bg-base-200 rounded-2xl mt-4">
                <input type="checkbox" id="menu-toggle" checked="checked"> 
                <div class="collapse-title text-xl font-medium px-10 pt-8 pb-8 flex justify-between items-center">
                    <h3 class="font-bold text-2xl">Total Kalori</h3>
                    <div class="flex gap-2">
                        <p class="font-bold text-2xl">408 Kkal</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 chevron" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div> 
                <div class="collapse-content px-10"> 
                    <table class="w-full">
                        <tr class="h-8 align-top">
                            <td>Tomat</td>
                            <td class="text-right">120 Kkal / 50 gram</td>
                        </tr>
                        <tr class="h-8 align-top">
                            <td>Tomat</td>
                            <td class="text-right">120 Kkal / 50 gram</td>
                        </tr>
                        <tr class="h-8 align-top">
                            <td>Tomat</td>
                            <td class="text-right">120 Kkal / 50 gram</td>
                        </tr>
                    </table>
                </div>
            </article> 
            <article class="bg-base-200 py-8 px-10 rounded-2xl mt-4">
                <h3 class="font-bold text-2xl mb-4">Langkah-langkah</h3>
                <p class="mb-4"><b>Step 1: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 2: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 3: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 4: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 5: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
            </article>
            <article class="bg-base-200 py-8 px-10 rounded-2xl mt-4" id="comment">
                <h3 class="font-bold text-2xl mb-4">Komentar</h3>
                @for($i = 0; $i <=2; $i++)
                <section class="flex gap-2 items-center">
                    <a href="#" class="flex-1/2">
                        <img src="https://i.insider.com/5ca389adc6cc503c5a53fd96?width=500&format=jpeg&auto=webp" class="mask mask-circle w-16">
                    </a>
                    <div class="flex flex-col flex-1">
                        <div class="flex justify-between">
                            <a href=""><p class="font-bold text-lg">John Donald</p></a>
                            <p class="text-sm">Just Now</p>
                        </div>
                        <p>Aku udah buat dan rasanya enak banget!</p>
                    </div>
                </section>
                <div class="divider"></div>
                @endfor
                <section>
                    <div class="form-control">
                        <textarea class="textarea h-24 resize-none" placeholder="Tulis komentar disini..."></textarea>
                    </div>
                    <div class="flex justify-end w-full mt-4">
                        <button class="btn btn-primary w-1/4">Kirim</button>
                    </div>
                </section>
            </article>
        </div>
        <aside class="col-span-1 flex flex-col gap-4">
            @for($i = 0; $i <= 3; $i++)
            <a href="#" class="relative">
                <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg" alt="Image 1" class="rounded-2xl">
                <div class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
                <div class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                    <h3 class="font-bold text-xl">Ayam Goreng Jawa</h3>
                    <p class="font-medium">Eko Prasetyo</p>
                </div>
            </a>
            @endfor
        </aside>
    </main>
@endsection

@section('script')
    <script src="{{ asset('js/detail-resep.js') }}"></script>
@endsection
</body>
</html>
