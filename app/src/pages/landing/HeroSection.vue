<template>
    <section class="relative w-full" data-aos="zoom-in-up">
        
        <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto relative">
            <div class="grid lg:grid-cols-2 gap-10 xl:gap-14 relative pt-24 lg:max-w-none max-w-2xl md:max-w-3xl mx-auto">
                <div class="lg:py-6">
                    <div class="text-center lg:text-left">
                        <h1 class="pt-4 text-white font-bold text-4xl md:text-5xl lg:text-6xl">
                            Hi, I'm <span class="bg-clip-text bg-gradient-to-r from-primary to-pink-500">
                                Playlist Generator AI
                            </span>😁
                        </h1>
                    </div>
                    <p class="text-gray-300 pt-8 text-center lg:text-left mx-auto max-w-xl">
                        I  can help you generate your playlist.
                        I will provide latest and top rated 5 songs per request.
                        You only need to choose a genre and i will do the rest for you very fast and accurate.
                    </p>
                    <div class="flex items-center gap-3 pt-9 flex-col sm:flex-row sm:w-max sm:mx-auto lg:mx-0">
                      
                        <button class="px-6 md:px-7 py-3 rounded-full relative group w-full sm:w-max flex justify-center bg-gray-50/[.1]">
                            <div class="hover:scale-105 transition-all ease-in-out flex justify-center items-center relative">
                            
                            <a href="/login" class="pl-2 text-primary text-white"> Click here to begin</a>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="lg:h-full md:flex">
                    <div class="flex w-full h-96 min-h-[24rem] lg:min-h-[none] lg:w-full lg:h-full items-center relative">
                        <div class="absolute h-full z-10 p-2 -translate-y-1/2 top-1/2 lg:right-3 md:right-40 sm:right-16 rounded-full ">
                            <img src="../../assets/top_picture.jpg" alt="Hero pic" width="500" height="auto" loading="lazy"
                            class="w-full h-full rounded-full object-cover"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();
</script>