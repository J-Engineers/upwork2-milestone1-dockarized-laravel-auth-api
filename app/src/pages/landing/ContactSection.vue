<script setup>

    import {ref} from "vue";
    import axiosClient from "../../axios.js";

    const data = ref({
      email: '',
      subject: '',
      message: '',
    })

    const errorMessage = ref('')
    const successMessage = ref('')

    function send(){
        axiosClient.post("/mail", data.value)
        .then(response => {
          successMessage.value = response.data.message;
        })
        .catch(error => {
          errorMessage.value = error.response.data.message;
        })
    }

    function resetValidation() {
      errorMessage.value = ''
    }

</script>

<template>
    <section class="text-white mt-20" id="contact">
        <h2 class="text-4xl font-bold text-white text-left mb-4 px-4 xl:pl-16">Let's Connect</h2>
        <div class="grid md:grid-cols-2 gap-4 relative px-4 xl:px-16 mt-8" data-aos="zoom-in-up">
            <div>
                <p class="text-[#adb7be]">
                    For more inquiries you can reach out to us.
                    We are available to serve you better.
                    Contact us today.
                </p>
                <div class="col-lg-4 col-md-4 mb-lg-0 mt-5">
                    <div class="flex mb-10 items-center">
                        <div class="p-2 bg-gray-50/[.1] rounded-[50%]">
                            <img src="https://img.icons8.com/metro/50/ffffff/new-post.png" alt="new-post" class="w-6">
                        </div>
                        <div class="ml-5 text-white">
                            <h4>Email</h4>
                            <a href=
                            "mailto:ugboguj@yahoo.com?subject=Playlist Generator AI&body=Hello, i wanna make more research about this project." 
                                target="_blank">
                                Send Us a mail
                            </a>
                        </div>
                    </div>
                    <div class="flex mb-10 items-center">
                        <div class="p-2 bg-gray-50/[.1] rounded-[50%]">
                            <img src="https://img.icons8.com/ios-filled/50/ffffff/phone.png" alt="phone" class="w-6">
                        </div>
                        <div class="ml-5 text-white">
                            <h4>Phone</h4>
                            <a  href="tel:+234813-818-4872">Click to call</a>
                        </div>
                    </div>
                    <div class="flex mb-10 items-center">
                        <div class="p-2 bg-gray-50/[.1] rounded-[50%]">
                            <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="linkedin"
                                class="w-6">
                        </div>
                        <div class="ml-5 text-white">
                            <h4>LinkedIn</h4>
                            <p>wwww.LinkedIn.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50/[.1] rounded-xl">
            <form class="flex flex-col p-8" @submit.prevent="send" data-aos="zoom-in-up" >

                <p v-if="successMessage" class="mt-4 py-2 px-3 rounded text-white bg-green-700">
                    {{ successMessage  }}
                </p>
                <div class="mb-6">
                    <label for="email" class="text-white block mb-2 text-sm font-medium">Email</label>
                    <input type="email" id="email" autocomplete="email" v-model="data.email" required @focus="resetValidation()" class="bg-[#111827] placeholder:[#9CA2A9] text-gray-100 text-sm rounded-lg block w-full p-2.5"
                    placeholder="email@gmail.com" name="email">
                    <p class="text-sm mt-1 text-red-600">
                        {{ errorMessage.includes('email') ? errorMessage : '' }}
                    </p>
                </div>
                <div class="mb-6">
                    <label for="subject" class="text-white block mb-2 text-sm font-medium">Subject</label>
                    <input type="subject" id="subject" autocomplete="subject" v-model="data.subject" required @focus="resetValidation()" class="bg-[#111827] placeholder:[#9CA2A9] text-gray-100 text-sm rounded-lg block w-full p-2.5"
                    placeholder="subject" name="subject">
                    <p class="text-sm mt-1 text-red-600">
                        {{ errorMessage.includes('subject') ? errorMessage : '' }}
                    </p>
                </div>
                <div class="mb-6">
                    <label for="message" class="text-white block mb-2 text-sm font-medium">Message</label>
                    <textarea id="Message" @focus="resetValidation()" v-model="data.message" autocomplete="message" required class="bg-[#111827] placeholder:[#9CA2A9] text-gray-100 text-sm rounded-lg block w-full p-2.5"
                    placeholder="Let's talk about ... " name="message"></textarea>
                    <p class="text-sm mt-1 text-red-600">
                        {{ errorMessage.includes('message') ? errorMessage : '' }}
                    </p>
                </div>
                <button type="submit" class="z-1 w-[100%!important] px-6 md:px-7 py-3 rounded-full sm:w-max flex justify-center text-white bg-gray-50/[.1]">
                    Send Message
                </button>
            </form>
        </div>
       
        </div>
    </section>
</template>

