<template>
    <a href="https://www.youtube.com/channel/UC_DHLqSbI0pJah8HUiEfx5g" target="_blank">
        <img :src="imageLink" alt="youtube" style="width: 180px;"
            @click="click()"
        />
    </a>
</template>

<script>
    export default {
        name: "YoutubeButton",
        props: ['imageLink'],
        methods: {
            click() {
                axios({
                    method: 'POST',
                    url: '/save-click',
                });
            }
        }
    }
</script>

<style scoped>

</style>
