<template>
    <div class="row">
        <div class="col-12 light-border-top">
            <div class="editor-section-title">Dashboard</div>
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
        name:'dashboard',
        mounted() {
        },
        components:{},
        props: [
        ],
        data: function () {
            return {

            }
        },
        computed: {

        },
        methods: {

        }
    }
</script>