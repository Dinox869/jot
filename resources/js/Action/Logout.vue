<template>

</template>

<script>
export default {
    name: "Logout",
    mounted() {
        axios.post('/logout',{}).finally(
            err=>{
             window.location = '/login';
            }
        )
    }
}
</script>

<style scoped>

</style>
