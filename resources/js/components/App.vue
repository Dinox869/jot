<template>
    <div class="h-screen bg-white">
        <div class="flex">
            <!--Load left section-->
            <div class="bg-gray-200 h-screen pl-6 w-48 border-r-2 border-gray-400">
                <nav class="pt-6">
                   <router-link to="/">
                       <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                       </svg>
                   </router-link>

                    <p class="font-semibold pt-12 text-xs text-gray-500 uppercase ">Create</p>

                    <router-link to="/contact/create" class="flex flex-row items-center py-2 ">
                        <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <div class="text-black hover:text-blue-400 text-sm font-bold tracking-wide pl-3">Add New</div>
                    </router-link>

                    <p class="font-semibold pt-12 text-xs text-gray-500 uppercase ">General</p>

                    <router-link to="/contact/index" class="flex flex-row items-center py-2 ">
                        <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div class="text-black hover:text-blue-400 text-sm font-bold tracking-wide pl-3">Contacts</div>
                    </router-link>


                    <p class="font-semibold pt-12 text-xs text-gray-500 uppercase ">Settings</p>

                    <router-link to="/logout" class="flex flex-row items-center py-2 ">
                        <svg class="text-blue-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <div class="text-black hover:text-blue-400 text-sm font-bold tracking-wide pl-3">Logout</div>
                    </router-link>
                </nav>
            </div>

            <!--Load right section-->

            <div class=" flex flex-1 flex-col h-screen overflow-y-hidden">
                  <div class="px-6 h-16 border-b border-gray-400 flex items-center justify-between">
                      <div>Contacts</div>
                      <AvatarComponent name="James Dennis"/>
                  </div>
                <div class=" flex flex-col overflow-y-hidden flex-1">
                    <router-view class="p-6 overflow-x-hidden"></router-view>
                </div>
              </div>
        </div>
</div>

</template>

<script>
import AvatarComponent from "./AvatarComponent";
export default {
    name: "App",
    components: {AvatarComponent},
}
</script>

<style scoped>

</style>
