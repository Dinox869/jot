<template>
    <div class="flex flex-row  border-b border-gray-200  mt-5 w-full mb-5">
        <AvatarComponent name="James"/>
        <div class="flex ml-5 flex-col ">
            <p class="font-bold text-lg text-blue-400 hover:text-blue-700">{{ contact.data.name }}</p>
            <p class="text-gray-700 font-semibold text-sm mb-5">{{ contact.data.company}}</p>
        </div>
    </div>
</template>

<script>
    import AvatarComponent from "./AvatarComponent";
    export default {
      name:"ExampleComponent",
        components: {AvatarComponent},
        props:[
            'name','contact'
            ]
    }
</script>
