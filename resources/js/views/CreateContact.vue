<template>
<div>
    <form @submit.prevent="submitForm()" class="space-y-7 flex flex-col">
        <InputField :errors="errors" name="name" label="Contact Name" placeholder="Contact name" @update:field= "form.name = $event"/>

        <InputField :errors="errors" name="email" label="E-mail" placeholder="Enter E-mail" @update:field= "form.email = $event"/>

        <InputField :errors="errors" name="company" label="Company Name" placeholder="Company" @update:field= "form.company = $event"/>

        <InputField :errors="errors" name="date" label="Birthday" placeholder="MM/DD/YYYY"  @update:field= "form.date = $event"/>

        <div class="flex mt-5 justify-end">
            <button class="py-2 px-4 rounded text-red-600 border mr-5 hover:border-red-700 ">Cancel</button>
            <button class="bg-blue-500 px-4 rounded text-white hover:bg-blue-400 py-2" type="submit">Add New Contact</button>
        </div>
    </form>
</div>
</template>

<script>
import InputField from "../components/InputField";
export default {
    name: "CreateContact",
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
    methods:{
        submitForm: function () {
            const axios = require('axios');
            axios.post('/contacts',this.form).then(
                response => {
                    this.$router.push({name:'Show', params:{id:response.data.data.id },path:'/contact/show/'+ response.data.data.id })
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
