<template>
<table class="table">
    <thead>
        <tr>
            <th class="topTilte" scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in param_todos">
            <td class="heightPara">{{item.title}}</td>
            <td class="heightPara">{{item.description}}</td>
        </tr>
    </tbody>
</table>
</template>

<script>
export default {
    props: ['param_todos'],
    data() {
        return {
            fields: [
                "To Do",
                "Description",
            ],
        }
    },
}
</script>