<script setup>
    import GuestLayout from "../components/GuestLayout.vue"

    import {ref} from "vue";
    import axiosClient from "../axios.js";
    import router from "../router.js";

    const data = ref({
      user_name: '',
      email: '',
      phone: '',
      password: '',
      confirm_password: '',
      referredby_user_id: '',
    })

    const errorMessages = ref('')

    function submit() {
        axiosClient.post("/user/registration", data.value)
        .then(response => {
          localStorage.setItem('success_msg', response.data.message)
          router.push({name: 'Verify'})
        })
        .catch(error => {
          errorMessages.value = error.response.data.message;
        })
    }

    function resetValidation() {
      errorMessages.value = ''
    }

</script>

<template>
    <GuestLayout>
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create new account</h2>
        
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        
        <form class="space-y-6" @submit.prevent="submit">
          
          <div>
            <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
            <div class="mt-2">
              <input type="text" name="username" id="username" autocomplete="username" required="" @focus="resetValidation()" v-model="data.user_name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            <p class="text-sm mt-1 text-pink-600">
              {{ errorMessages.includes('user_name') ? errorMessages : '' }}
            </p>

          </div>

          <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
            <div class="mt-2">
              <input type="email" name="email" id="email" autocomplete="email" required="" @focus="resetValidation()" v-model="data.email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            <p class="text-sm mt-1 text-pink-600">
              {{ errorMessages.includes('email') ? errorMessages : '' }}
            </p>

          </div>

          <div>
            <label for="phone" class="block text-sm/6 font-medium text-gray-900">Phone</label>
            <div class="mt-2">
              <input type="text" name="phone" id="phone" autocomplete="phone" required="" @focus="resetValidation()" v-model="data.phone" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            <p class="text-sm mt-1 text-pink-600">
              {{ errorMessages.includes('phone') ? errorMessages : '' }}
            </p>

          </div>
  
          <div>
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
              
            <div class="mt-2">
              <input type="password" name="password" id="password" required="" @focus="resetValidation()"  v-model="data.password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            <p class="text-sm mt-1 text-pink-600">
              {{ errorMessages.includes('password') ? errorMessages : '' }}
            </p>
          </div>

          <div>
            <label for="confirm_password" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
              
            <div class="mt-2">
              <input type="password" name="confirm_password" id="confirm_password" required="" @focus="resetValidation()" v-model="data.confirm_password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            <p class="text-sm mt-1 text-pink-600">
              {{ errorMessages.includes('confirm_password') ? errorMessages : '' }}
            </p>
          </div>
  
          <div>
            <button type="submit" class="flex w-full justify-center rounded-md  bg-gray-50/[.1] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Account</button>
          </div>
        </form>
  
        <p class="mt-10 text-center text-sm/6 text-white-500">
          Already have an account?
          {{ ' ' }}
          <RouterLink :to="{name: 'Login'}"  class="text-white-500 font-semibold  hover:text-indigo-500">Login</RouterLink>
        </p>
      </div>
    </GuestLayout>
</template>

<style scoped>

</style>