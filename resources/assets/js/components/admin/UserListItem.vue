<template>
    <tr>
        <td>{{ user.id }}.</td>
        <td>
            {{ user.name }}
        </td>
        <td>
            {{ user.email }}
        </td>
        <td>
            {{ user.updated_at }}
        </td>
        <td>
            <div type="button" class="btn btn-default" @click="editItem()">編集</div>
            <div type="button" class="btn btn-default" @click="deleteItem()">削除</div>
        </td>
    </tr>
</template>

<script>
    export default {
        props: [
            'user',
        ],
        methods: {
            editItem: function () {
                location.href = '/admin/users/' + this.user.id + '/edit';
            },
            deleteItem: function () {
                console.log('delete:' + this.user.id);
            },
        }
    }
</script>
