<template>
    <div class="min-h-screen">
      <!-- Wrap components in Suspense to handle loading -->
       <Suspense>
        <template #default>
          <!-- Wrap all Components inside a single root element -->
           <div>
              <NavBar />
              <HeroSection />
              <ServicesSection />
              <ContactSection />
              <Footer />
              <BackToTop />
        </div>
      </template>
      <template #fallback>
        <div class="flex justify-center items-center min-h-screen">
            <loadingSpinner />
        </div>
      </template>
    </Suspense>
    </div>
  </template>
  
  <script setup>
   import { defineAsyncComponent } from 'vue';
  //Import Components Asynchronously
  const NavBar = defineAsyncComponent(()=>import('./landing/NavBar.vue'));
  const HeroSection = defineAsyncComponent(()=>import('./landing/HeroSection.vue'));
  const ServicesSection = defineAsyncComponent(()=>import('./landing/ServicesSection.vue'));
  const ContactSection = defineAsyncComponent(()=>import('./landing/ContactSection.vue'));
  const Footer = defineAsyncComponent(()=>import('./landing/Footer.vue'));
  const BackToTop = defineAsyncComponent(()=>import('./landing/BackToTop.vue'));
  import loadingSpinner from './landing/loadingSpinner.vue';
  </script>
  <style>
    *{
      scrollbar-width: thin;
      scrollbar-color: #111827 #f1f1f1;
    }
  </style>
  
  