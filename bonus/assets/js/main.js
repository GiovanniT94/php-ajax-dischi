const app = new Vue({
    el: '#app',
    data: {
        discs: [],
        genresDisks: []

    },
    mounted() {
        axios
            .get('./api/discs.php')
            .then(response => {
                console.log(response);
                this.discs = response.data
            }).catch(error => {
                console.log(error);
            })
        axios
            .get('./api/genres.php')
            .then(response => {
                console.log(response);
                this.genresDisks = response.data
            }).catch(error => {
                console.log(error);
            })

    }
})