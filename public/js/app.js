

var app = new Vue({
    el: '#app',
    delimiters: ['${', '}'],
    data() {
        return {
            page: 1,
            search: '',
            state: [],
            hallType: [],
            additions: [],
            person_min_price: 0,
            person_max_price: 0,

            halls: {},
        }
    },
    props: {
        page: this.page,
    },

    mounted() {
        this.submitForm();
    },

    methods: {
        submitForm() {

            axios.post('/', {
                search: this.search,
                state: this.state,
                halltype: this.hallType,
                addition: this.additions,
            })
                .then((response) => {

                    console.log(response);
                    this.halls = response.data[0];

                })
                .catch(e => {
                    console.log(e);
                });
        }
    },

    filters: {
        truncate: function(value) {
            if (value.length > 100) {
                value = value.substring(0, 93) + '...';
            }

            return value;
        }
    }
});

