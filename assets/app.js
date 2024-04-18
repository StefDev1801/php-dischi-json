const { createApp } = Vue;
createApp({
    data() {
        return {
            base_api_url: 'server.php',
            dischi: [],
            error: '',
        }
    },
    mounted() {
        axios.get(this.base_api_url)
            .then((result) => {
                console.log(result.data);
                this.dischi = result.data;

            })
            .catch((err) => {
                console.log(err.message);
                this.error = err.message
            });
    },
    methods: {

    }
}).mount('#app')

