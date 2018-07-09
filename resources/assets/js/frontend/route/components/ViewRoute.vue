<template>
    <div class="row">
        <div class="col-12 light-border-top">
            <div class="editor-section-title">Manage Post</div>
        </div>

        <div class="col-12">
            <div class="col-md-3 float-left pointer pl-0" v-on:click="setactivetab('overview')">Overview</div>
            <div class="col-md-3 float-left pointer" v-on:click="setactivetab('edit')">Edit</div>
            <div class="col-md-3 float-left pointer" v-on:click="setactivetab('analytics')">Analytics</div>
            <div class="col-md-3 float-left pointer" v-on:click="setactivetab('moderation')">Moderation</div>
        </div>

        <div class="col-12" v-if="activeTab === 'overview'">
            Overview
        </div>

        <div class="col-12" v-if="activeTab === 'edit'">
            <posteditor :post="post"></posteditor>
        </div>

        <div class="col-12" v-if="activeTab === 'analytics'">
            Analytics
        </div>

        <div class="col-12" v-if="activeTab === 'moderation'">
            Moderation
        </div>
    </div>
</template>

<script>
    export default {
        name:'route',
        mounted() {

        },
        components:{},
        props: [
            'route',
        ],
        data: function () {
            return {

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

                        vm.post = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>