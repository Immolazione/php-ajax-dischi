console.log('Vue Ok', Vue);

Vue.config.devtools = true;

const app = new Vue ({
    eh: '#root',
    data: {
        albums: [],
        baseUri: 'http://localhost/php-ajax-dischi/milestone1/api'
    },
    mounted() {
        axios.get(this.BaseUri).then(res => {
            this.albums = res.data;
        })
    }
}) 