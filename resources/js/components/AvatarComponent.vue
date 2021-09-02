<template>
    <div class="rounded-full text-white bg-blue-400 flex items-center justify-center h-10 w-10 border border-gray-400">{{userCircle}}</div>
</template>

<script>
export default {
    name: "AvatarComponent",
    props: [
        'name',
    ],
    computed:{
        userCircle: function(){
            return this.name.match(/[A-Z]/g).slice(0,2).join('');
        }
    }

}
</script>

<style scoped>

</style>
