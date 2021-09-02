<template>
<div>
    <div v-if="loading">Loading...</div>
    <div v-else>
        <div class="flex  items-center justify-between">
            <div class="hover:text-blue-400 text-blue-700" @click="$router.back()" >< Back</div>
            <div class="relative">
                <router-link :to="'/contacts/'+contact.id+'/edit'" class="px-4 py-2 rounded text-sm mr-3 text-green-500 border border-green-500 font-bold"> Edit</router-link>
                <a @click="modal =!modal "  class="px-4 py-2 rounded text-red-500 border border-red-500 font-bold text-sm">Delete</a>
                <div v-if="modal" class="absolute bg-blue-900 text-white z-20 rounded-lg p-8 w-64 right-0 mt-2 mr-5">
                    <p class="font-bold">Are you sure you want to delete this record ?</p>
                    <div class="flex items-center mt-5 justify-end">
                        <button @click="modal =!modal ">Cancel</button>
                        <button @click="destroyed" class="bg-red-500 rounded px-4 ml-5 py-2 text-white ">Delete</button>
                    </div>
                </div>
            </div>
            <div v-if="modal" class="bg-gray-500 absolute opacity-30 top-0 left-0 right-0 bottom-0 z-10"></div>
        </div>

        <div class="mt-7 space-y-7">
            <div class="flex flex-row items-center">

                <AvatarComponent :name="contact.name"/>

                <h1 class="text-black ml-5 text-2xl font-semibold">{{ contact.name }}</h1>
            </div>

            <div>
                <p class="uppercase font-bold text-gray-600 text-xs">Contact</p>
                <p class="text-blue-400 hover:text-blue-500 font-semibold text-sm mt-1.5">{{ contact.email }}</p>
            </div>

            <div>
                <p class="uppercase font-bold text-gray-600 text-xs">Company</p>
                <p class="text-blue-400 hover:text-blue-500 font-semibold text-sm mt-1.5">{{contact.company}}</p>
            </div>

            <div>
                <p class="uppercase font-bold text-gray-600 text-xs">Birthday</p>
                <p class="text-blue-400 hover:text-blue-500 font-semibold text-sm mt-1.5">{{contact.date}}</p>
            </div>

        </div>
    </div>
</div>
</template>

<script>
import AvatarComponent from "../components/AvatarComponent";
export default {
    name: "ContactShow",
    components: {AvatarComponent},
    mounted() {
        axios.get('/contacts/'+ this.$route.params.id).then(
            Response => {
                this.contact = Response.data;
                this.loading = false;
            })
            .catch(
                errors=>{
                    this.loading = false;
                    if(this.response.status === 404){
                        this.$router.push('/contact')
                    }

        });
    },
    data: function (){
        return {
            loading: true,
            contact: null,
            modal: false
        }
    },
    methods:{
        destroyed: function (){
            axios.get('/contact/destroy/'+ this.$route.params.id).then(
                response=>{
                    this.$router.push('/contact/index')
                }
            ).catch(errors=>{
                alert('Internal Error. Unable to delete Contact');
            });
        }
    }
}
</script>

<style scoped>

</style>
