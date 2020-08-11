<template>
    <div>
        <img :src="card ? card.image : defaultImg"
             style="max-width: 150px; height: 200px; display: block; margin: 10px auto; cursor: pointer"
             @click="getRandomCard(type)"
        />
        <div v-if="card">
            <p>{{ card.name }}</p>
            <p>{{ card.description_ru }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['cardType','language', 'defaultImage'],
        data() {
            return {
                lang: this.language,
                type: this.cardType,
                card: null,
                defaultImg: this.defaultImage,
                clicks: 0
            }
        },
        methods: {
            getRandomCard(type) {
                if (this.clicks > 1) {
                    alert('Вы уже гадали сегодня');
                    return;
                }
                axios({
                    method: 'POST',
                    data: {
                        'type': type
                    },
                    url: '/get-card',
                })
                    .then(response => {
                        this.card = response.data.card;
                        this.clicks = this.clicks + 1;
                    })
                    .catch(error => {
                        this.error = error.response.data.error;
                    })
                    .finally(response => {
                        //loader.hide()
                    });
            },
        },
    }
</script>
