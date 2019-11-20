<template>
<table>
    <thead>
        <tr>
            <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in projects">
            <td>{{item.created_at}}</td>
            <td>{{item.name}}</td>
            <td>{{item.archived}}</td>
        </tr>
    </tbody>
</table>
</template>

<script>
export default {
    props:['projects'],
    data() {
        return {

            modes: ['multi', 'single', 'range'],
            fields: ['date','nom_prénom', 'Email', 'Tél', 'Entity', 'Adress', 'Zip_Code', 'City', 'Naf', 'Siret', 'KBIS', 'Country', 'Language', 'Money', 'Time_Zone', 'Title', 'Last_name', 'First_name', 'Statut'],
            selectMode: 'multi',
        }
    },
    methods: {
        onSubmit(evt) {
            axios.get('/api/1.0/projects', {

            })
            
        },
        onRowSelected(items) {
            this.selected = items
        },
        selectAllRows() {
            this.$refs.selectableTable.selectAllRows()
        },
        clearSelected() {
            this.$refs.selectableTable.clearSelected()
        },
        selectThirdRow() {
            // Rows are indexed from 0, so the third row is index 2
            this.$refs.selectableTable.selectRow(2)
        },
        unselectThirdRow() {
            // Rows are indexed from 0, so the third row is index 2
            this.$refs.selectableTable.unselectRow(2)
        }
    }
}
</script>