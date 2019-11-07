<template>
    <b-table
      ref="selectableTable"
      selectable
      :select-mode="selectMode"
      selected-variant="active"
      :items="items"
      :fields="fields"
      @row-selected="onRowSelected"
      responsive="sm"
    >
      <!-- Example scoped slot for select state illustrative purposes -->
      <template v-slot:cell(selected)="{ rowSelected }">
        <template v-if="rowSelected">
          <b-button variant="success" aria-hidden="true">&check; ok</b-button>
          <span class="sr-only">Selected</span>
        </template>
        <template v-else>
          <span aria-hidden="true">To do</span>
          <span class="sr-only">Not selected</span>
        </template>
      </template>
    </b-table>
</template>

<script>
  export default {
    data() {
      return {
        modes: ['multi', 'single', 'range'],
        fields: ['selected', 'isActive', 'Premier_jour', 'Date', 'Référence', 'Business_Developper', 'Contact', 'Dénomination_Social', 'Action', 'Montant', 'Provenance_du_contact', 'prochaine_action', 'date_prochaine_action', 'status_action', 'note', 'compétude'],
        items: [
          { isActive: false, Premier_jour: '11/01/2019', Date: '11/01/2019', Référence: '112019001', Business_Developper: 'Paul Staellen', Contact: 'Blocking / Générale de construction / José  GARCIA', Dénomination_Social: 'Blocking', Action: 'Premier Contact', Montant: 12000, Provenance_du_contact: 'Appel entrant', prochaine_action:'Relance si pas de retour à j+15', date_prochaine_action: '11/20/2019', status_action: 'to do', note: 'Proposition envoyée, attente de retour de sa part', compétude:'100'},
        ],
        selectMode: 'multi',
        selected: []
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