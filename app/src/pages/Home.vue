

<template>
    <img src="../assets/mic.jpg"  class="pb-3" />

    <form @submit.prevent="playlist" class="bg-red-100 custon-form">
        <div v-if="errorMessage" class="mt-4 py-2 px-3 rounded text-white bg-red-400">
            {{errorMessage}}
        </div>
            
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Generate your playlist now</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This app will help you generate a playlist of 5 recent, latest and rated songs based on any genre you select. Select and genre below from the list and click on generate playlist button.</p>

                <Listbox as="div" v-model="selected">
                    <ListboxLabel class="block text-sm/6 font-medium text-gray-900">Select A genre</ListboxLabel>
                    <div class="relative mt-2">
                        <ListboxButton class="grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-2 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <span class="col-start-1 row-start-1 flex items-center gap-3 pr-6">
                            <span class="block truncate">{{ selected.name }}</span>
                        </span>
                        <ChevronUpDownIcon class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4" aria-hidden="true" />
                        </ListboxButton>
                
                        <transition leave-active-class="transition ease-in duration-100" leave-from-class="opacity-100" leave-to-class="opacity-0">
                        <ListboxOptions class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base ring-1 shadow-lg ring-black/5 focus:outline-hidden sm:text-sm">
                            <ListboxOption as="template" v-for="person in people" :key="person.id" :value="person" v-slot="{ active, selected }">
                            <li :class="[active ? 'bg-indigo-600 text-white outline-hidden' : 'text-gray-900', 'relative cursor-default py-2 pr-9 pl-3 select-none']">
                                <div class="flex items-center">
                                <span :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">{{ person.name }}</span>
                                </div>
                
                                <span v-if="selected" :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                <CheckIcon class="size-5" aria-hidden="true" />
                                </span>
                            </li>
                            </ListboxOption>
                        </ListboxOptions>
                        </transition>
                    </div>
                </Listbox>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Generate playlist</button>
                </div>
            

                <div v-if="playlistData">
                    <h2 class="text-base/7 font-semibold text-gray-900">Nice!, your playlist is ready.</h2>
                    <div v-for="song in playlistData">
                        <div class="pt-4 pb-4 box-border bg-[rgb(196,255,235)] shadow-[10px_5px_5px_5px_rgb(251,173,173)] m-[15px] p-2.5 rounded-[30px]">
                            <span class="text-base/7 font-semibold text-green-900">{{ song.title }}</span>
                            <span class="text-red-400"> by </span>
                            <span class="mt-1 text-sm/6 text-yellow-600">{{ song.artists }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
  </template>
  
  <script setup>
    import { ref } from 'vue'
    import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions } from '@headlessui/vue'
    import { ChevronUpDownIcon } from '@heroicons/vue/16/solid'
    import { CheckIcon } from '@heroicons/vue/20/solid'

    import axiosClient from "../axios.js";
  
    const people = [
        {
            id: 1,
            name: 'Pop'
        },
        {
            id: 2,
            name: 'Jazz',
        },
        {
            id: 3,
            name: 'Rock',
        },
        {
            id: 4,
            name: 'Worship',
        },
    ]

    const selected = ref(people[3]);

    const errorMessage = ref('');

    const playlistData = ref('');

    function playlist() {
        axiosClient.post("/user/prompt", {"genre": selected.value.name})
        .then(response => {
            playlistData.value = response.data.data.answer
        })
        .catch(error => {
            console.log(error)
            errorMessage.value = error.response.data.message;
        })
    }
</script>

<style scoped>
    .custon-form{
        border-radius: 30px;
        padding: 15px 15px;
    }
</style>