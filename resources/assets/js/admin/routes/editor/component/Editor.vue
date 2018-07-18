<template>
    <div class="row">
        <div class="" v-if="editor_open">
            <span>close</span>
        </div>
        <div class="" v-else>
          <span>edit</span>
        </div>
    </div>
</template>

<script>
    export default {
        name:'routeeditor',
        mounted() {
            console.log('Route editor mounted.');
        },
        components:{

        },
        props: [
            'route',
            'route_id',
        ],
        data: function () {
            return {
                active_tab: 'basics',
                editor_open: false
            }
        },
        computed: {

        },
        methods: {
            setactivetab: function (tab) {
                console.log(tab)
                this.activeTab = tab
            },
            fetch_route: function(id){
                const vm = this;

                axios.get('/route/' + id)
                    .then(function (response) {
                        console.log(response.data);

                        vm.route = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>
