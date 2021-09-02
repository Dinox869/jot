<template>
<div>
    <div v-if="loading">Loading</div>
    <div v-else>
        <div v-if="contacts.length === 0">
            <p class="text-2xl font-bold text-gray-600">No Contacts.</p>
            <div class="">
                <router-link to="/contacts/create"  class="text-green-500 font-semibold text-2xl ml-10">Get Started</router-link>
            </div>
        </div>
        <div v-for="contact in contacts" >
              <router-link :to="'/contacts/show/'+contact.data.id"><ExampleComponent  :contact="contact" /> </router-link>
        </div>
    </div>
</div>
</template>

<script>
import ExampleComponent from "../components/ExampleComponent";
export default {
    name: "ContactIndex",
    components: {ExampleComponent},
    mounted() {
        axios.get('/index').then(
            response=>{
                console.log(response);
                this.contacts = response.data.data;

                this.loading = false;
            }
        ).catch(error=>{

            this.loading = false;

            alert('Unable to fetch Contacts');
        })
    },
    data: function () {
        return {
            loading:true,
            contacts: null
        }
    }
}
</script>

<style scoped>

</style>
