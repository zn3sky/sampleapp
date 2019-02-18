<template>
    <table class="table table-condensed">
        <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>name</th>
                <th>email</th>
                <th>最終更新日時</th>
                <th>操作</th>
            </tr>
            <user-list-item
                v-for="(user, index) in users"
                :user="user"
                :index="index"
                :key="user.id"
            >
            </user-list-item>
        </tbody>
    </table>

</template>

<script>
    export default {
        props: [
            'users',
        ],
    }
</script>
