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
    </b-table>
</template>

<script>
  export default {
    data() {
      return {
        modes: ['multi', 'single', 'range'],
        fields: ['isActive', 'Business_Developper', 'Email', 'Tél', 'compétude'],
        items: [
          { isActive: false, Business_Developper: 'Paul Staellen', Email: 'jean@gmail.com',
          Tél: '07-81-11-31-67', Dénomination_Social: 'Blocking', compétude:'100'},
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