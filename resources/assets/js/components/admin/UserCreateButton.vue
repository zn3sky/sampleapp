<template>
    <div type="button" class="btn btn-default" @click="createUser()">新規作成</div>
</template>

<script>
    export default {
        methods: {
            createUser: function () {
                // TODO const
                location.href = '/admin/users/create';
            },
        }
    }
</script>
