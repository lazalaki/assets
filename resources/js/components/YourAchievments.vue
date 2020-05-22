<template>
    <div>
        <h1 class="font-normal text-3xl text-gray-800 leading-none mb-12">
            Your Achievments
        </h1>

        <input 
            class="border p-2 rounded w-full" 
            placeholder="Yout API token" 
            v-model="token"
            @keyup.enter="fetchAchievments"
        >

        <p class="text-red-500 text-sm italic" v-if="message" v-text="message"></p>

        <ul>
            <li 
                v-for="(achievment, index) in achievments" :key="index" 
                v-text="achievment.achievment">
            </li>
        </ul>


    </div>
</template>

<script>
    export default {
        data() {
            return {
                achievments: [],
                token: '',
                message: ''
            }
        },

        methods: {
            fetchAchievments() {
            axios.get(`http://127.0.0.1:8000/api/achievments?api_token=${this.token}`)
                .catch(error => {
                    this.message = error.response.data.message
                    this.achievments = []
                })
                .then(response => {
                     this.achievments = response.data
                     this.message = null
                 })
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>