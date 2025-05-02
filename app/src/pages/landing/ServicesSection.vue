<template >
    <section class="text-white mt-20" id="services">
        <div class="px-4 xl:pl-16">
            <h2 class="text-4xl font-bold text-white mb-4">My Services</h2>
        </div>
        <div class="py-8 xl:px-16 px-4 sm:py-16 grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
            <div v-for="service in services" :key="service.id" data-aos="fade-up"
            class="px-8 py-12 rounded-xl bg-gray-50/[.1]"
            >
                <div class="mx-auto h-72 w-48 text-center xl:h-72 xl:w-72">
                    <div>
                        <img :src="service.icon" alt="service icon">
                    </div>
                </div>
                <div class="text-center -mt-16">
                    <h3 class="pt-8 text-lg font-semibold uppercase bg-clip-text bg-gradient-to-r from-primary to-secondary lg:text-xl">
                        {{ service.name }}
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        {{ service.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import {ref} from 'vue';
const baseURL = "http://gridirontest.phenom.ng/"

const services =ref([
    {
        id:1,
        icon: baseURL+'ai.jpg',
        name:'Secure Login',
        description:'You are given a secured account and your data privacy is top notch.'
    },
    {
        id:2,
        icon: baseURL+'ai1.jpg',
        name:'Reset Security Credentials',
        description:'We understand that you may forget your signup details, we got you covered, you can reset it.'
    },
    {
        id:3,
        icon: baseURL+'ai2.jpg',
        name:'Automated Playlist',
        description:'Our AI generates latest and top rated songs for your playlist'
    },
  
    ])
</script>

