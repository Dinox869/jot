<template>
    <div>
        <div>
            <div class="hover:text-blue-400 text-blue-700 mb-10" @click="$router.back()" >< Back</div>
        </div>
        <form @submit.prevent="submitForm()" class="space-y-7 flex flex-col">
            <InputField :data="form.name" :errors="errors" name="name" label="Contact Name" placeholder="Contact name" @update:field= "form.name = $event"/>

            <InputField :data="form.email" :errors="errors" name="email" label="E-mail" placeholder="Enter E-mail" @update:field= "form.email = $event"/>

            <InputField :data="form.company" :errors="errors" name="company" label="Company Name" placeholder="Company" @update:field= "form.company = $event"/>

            <InputField  :data="form.date" :errors="errors" name="date" label="Birthday" placeholder="MM/DD/YYYY"  @update:field= "form.date = $event"/>

            <div class="flex mt-5 justify-end">
                <button class="py-2 px-4 rounded text-red-600 border mr-5 hover:border-red-700 ">Cancel</button>
                <button class="bg-blue-500 px-4 rounded text-white hover:bg-blue-400 py-2" type="submit">Update Contact</button>
            </div>
        </form>
    </div>
</template>

<script>
import InputField from "../components/InputField";
export default {
    name: "ContactEdit",
    components:{
        InputField
    },
    data: function ()
    {
        return {
            form: {
                'name' : '',
                'email' : '',
                'company' : '',
                'date' : '',
            },
            errors: null
        }
    },
    mounted() {
        axios.get('/contacts/'+ this.$route.params.id).then(
                Response => {
                    this.form = Response.data;
                    this.loading = false;
                })
            .catch(
                errors => {
                    this.loading = false;
                    if(this.response.status === 404){
                        this.$router.push('/contact')
                    }

                });

    },
    methods:{
        submitForm: function () {

            axios.put('/contacts/edit/'+ this.$route.params.id , this.form).then(
                response => {
                    this.$router.push({name:'Show', params:{id: this.form.id },path:'/contact/show/'+ this.form.id })
                }
            ).catch(
                errors => {
                    this.errors = errors.response.data.errors;
                }
            );
        }
    }
}
</script>

<style scoped>

</style>
