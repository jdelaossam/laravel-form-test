<template lang="html">
  <div id="app">
    <NavBar/>
    <b-container>
      <b-form>
        <b-row>
          <b-col cols="2">
            <b-form-group
              label="Email address:"
              description="We'll never share your email with anyone else."
            >
              <b-form-input
                id="input-1"
                v-model="form.email"
                type="email"
                required
                placeholder="Enter email"
              ></b-form-input>
            </b-form-group>
          </b-col>
        </b-row>
      </b-form>
      <b-table striped hover :items="items" :fields="fields">
        <template slot="[actions]" slot-scope="row">
            <b-button size="sm" title="Edit" @click.stop="targetEdit(row.item)" variant="primary" class="mr-1">
              Editar
            </b-button>
            <b-button size="sm" title="Edit" @click.stop="targetRemove(row.item)" variant="warning" class="mr-1">
              Eliminar
            </b-button>
        </template>
      </b-table>
    </b-container>
    <router-view/>
  </div>
</template>

<script>
import NavBar from './components/Menu'
/* eslint-disable */
export default {
  name: 'app',
  components: {
    NavBar
  },
  data () {
    return {
      form: {
          email: '',
          name: '',
          food: null,
          checked: []
        },
      foods: [{ text: 'Select One', value: null }, 'Carrots', 'Beans', 'Tomatoes', 'Corn'],
      items: [
          { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { age: 38, first_name: 'Jami', last_name: 'Carney' }
        ],
      fields: [
        { key: 'age', label: 'Edad' },
        { key: 'first_name', label: 'Nombre' },
        { key: 'last_name', label: 'Apellidos' },
        { key: 'actions', label: 'Actions' }
      ]
    }
  },
  methods: {
    targetEdit (row) {
      // eslint-disable-next-line
      console.log(row)
    },
    targetRemove (row) {
      this.$bvModal.msgBoxConfirm('Please confirm that you want to delete everything.', {
          title: 'Please Confirm',
          size: 'sm',
          buttonSize: 'sm',
          okVariant: 'danger',
          okTitle: 'YES',
          cancelTitle: 'NO',
          footerClass: 'p-2',
          hideHeaderClose: false,
          centered: true
        })
          .then(value => {
            console.log(value)
          })
          .catch(err => {
            // An error occurred
          })
    },
    onReset () {
      evt.preventDefault()
      // Reset our form values
      this.form.email = ''
      this.form.name = ''
      this.form.food = null
      this.form.checked = []
    }
  },
}
</script>
