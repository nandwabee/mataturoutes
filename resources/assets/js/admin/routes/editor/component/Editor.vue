<template>
    <div class="row">
        <div class="" v-if="editor_open">
            <span v-on:click="closeeditor()">close</span>
            <div class="form-group">
                <div class="form-group">
                    <label for="route_number">Route Number</label>
                    <input name="route_number" type="text" class="form-control" id="route_number"
                           aria-describedby="route_number_help" v-model="route.route_number">
                    <small id="route_number_help" class="form-text text-muted">The assigned route number.</small>
                </div>
            </div>
        </div>
        <div class="" v-else>
            <span v-on:click="openeditor()">edit</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'routeeditor',
        mounted() {
            console.log('Route editor mounted.');
        },
        components: {},
        props: [
            'route_id',
        ],
        data: function () {
            return {
                active_tab: 'basics',
                editor_open: false,
                route:{}
            }
        },
        computed: {},
        methods: {
            openeditor: function () {
                console.log(this.route_id);
                this.fetch_route(this.route_id);

                this.editor_open = true;
            },
            closeeditor: function () {
                this.editor_open = false;

                console.log(this.route_id);
            },
            setactivetab: function (tab) {
                console.log(tab)
                this.activeTab = tab
            },
            fetch_route: function (id) {
                const vm = this;

                axios.get('/api/v1/routes/' + id)
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
