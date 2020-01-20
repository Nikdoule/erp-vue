<template>
<table class="table-param">
    <thead>
        <tr>
            <th class="top-title" scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in param_actions">
            <td class="height-param">{{item.title}}</td>
            <td class="height-param">{{item.description}}</td>
        </tr>
    </tbody>
</table>
</template>

<script>
export default {
    props: ['param_actions'],
    data() {
        return {
            fields: [
                "Type Of Action",
                "Description",
            ],
        }
    },
}
</script>
