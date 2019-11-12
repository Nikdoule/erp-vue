<template>
<b-table ref="selectableTable" selectable :select-mode="selectMode" selected-variant="active" :items="items" :fields="fields" @row-selected="onRowSelected" responsive="sm">
</b-table>
</template>

<script>
export default {
    data() {
        return {
            modes: ['multi', 'single', 'range'],
            fields: ['Name_Mark_Dénomination', 'Email', 'Phone', 'Entity', 'Adress', 'Zip_Code', 'City', 'Naf', 'Siret', 'KBIS', 'Country', 'Language', 'Money', 'Time_Zone', 'Title', 'Last_name', 'First_name', 'Statut'],
            items: [
                {
                Name_Mark_Dénomination: 'Françis Durant/ Bloking /Général constructor',
                Email: 'Françis@gmail.com',
                Phone: '07-81-11-31-67',
                Entity: 'Blocking',
                Adress: '27 rue du 4 septembre',
                Zip_Code: '62800',
                City: 'Lievin',
                Naf: '4051c',
                Siret: '12345678',
                KBIS: 'présent',
                Country: 'France',
                Language: 'Française',
                Money: 'Euro',
                Time_Zone: 'GMT+1',
                Title: 'Monsieur',
                Last_name: 'Paul',
                First_name: 'Staelen',
                Statut: 'Client'
                }, 
                {
                Name_Mark_Dénomination: 'Guy Staellen/ Strat /Général constructor',
                Email: 'jean@gmail.com',
                Phone: '07-81-11-31-67',
                Entity: 'Blocking',
                Adress: '14 rue du 4 septembre',
                Zip_Code: '62800',
                City: 'Lievin',
                Naf: '4051c',
                Siret: '12345678',
                KBIS: 'présent',
                Country: 'France',
                Language: 'Française',
                Money: 'Euro',
                Time_Zone: 'GMT+1',
                Title: 'Monsieur',
                Last_name: 'Paul',
                First_name: 'Staelen',
                Statut: 'Prospect'
                },
                {
                Name_Mark_Dénomination: 'Paul Staellen/ Bloking /Général constructor',
                Email: 'jean@gmail.com',
                Phone: '07-81-11-31-67',
                Entity: 'Blocking',
                Adress: '14 rue du 4 septembre',
                Zip_Code: '62800',
                City: 'Lievin',
                Naf: '4051c',
                Siret: '12345678',
                KBIS: 'présent',
                Country: 'France',
                Language: 'Française',
                Money: 'Euro',
                Time_Zone: 'GMT+1',
                Title: 'Monsieur',
                Last_name: 'Paul',
                First_name: 'Staelen',
                Statut: 'Client'
                }
            ],
            selectMode: 'multi',
        }
    },
    methods: {
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
