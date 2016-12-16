var ConfigurationPage = new Vue({
  el: '#app',
  data: {},
  methods: {}
});


Vue.component('actionsList', {
    props: {
        'apiUrl': String
    },
    filters: {},
    methods: {},
    computed: {},
    template: '#actionsList-template',
});