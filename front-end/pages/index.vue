<template>
    <v-app>
      <v-main>
        <v-container class="d-flex justify-center align-center fill-height">
          <v-card class="pa-8" width="500" flat>
            <v-card-title class="justify-center">
              <img src="../assets/logo.png" alt="Logo" height="350">
            </v-card-title>
            <v-card-text>
              <v-text-field
                label="Email"
                variant="outlined"
                type="email"
                v-model="data.email"
              />
              
              <v-text-field
                variant="outlined"
                label="Senha"
                v-model="data.password"
                :append-inner-icon="data.showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                @click:append-inner="data.showPassword = !data.showPassword"
                :type="data.showPassword ? 'password' : 'text'"
              />

            </v-card-text>
              <v-card-actions class="justify-end">
                <v-btn variant="flat" color="primary" @click="login">
                    Entrar
                </v-btn>
            </v-card-actions>
          </v-card>
        </v-container>
      </v-main>
    </v-app>
  </template>

<script setup>
import { ref } from 'vue'
import { email, required} from '@vuelidate/validators'
import useVuelidate from '@vuelidate/core'

const data = ref({
  loginData: {
    email: '',
    password: ''
  },
  showPassword: false
});

const rules = {
  email: { required, email },
  password: { required }
}

const v$ = useVuelidate(rules, data.value)

async function login() {
  const validate = await v$.value.$validate()

  if (!validate) {
    window.alert('não passou')
    return 
  }  

  window.alert('passou')
}
</script>

<style lang="sass">
body
  overflow: hidden

</style>