<template>

  <h1>Ajout d'une companie</h1>

  <form class="needs-validation was-validated">

    <div class="mb-3">
        <label for="name" class="form-label">Raison sociale</label>
        <div class="input-group has-validation">
            <input
                v-model="formData.name"
                type="text"
                class="form-control"
                id="name"
            >
          <template v-if="errors.name">
            <div class="invalid-feedback" v-text="errors.name[0]"></div>
          </template>
        </div>
      </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Téléphone</label>
        <input
            v-model="formData.phone"
            type="tel"
            class="form-control"
            id="phone"
        >
      <template v-if="errors.phone">
        <span v-text="errors.phone[0]"></span>
      </template>
    </div>
    <div class="mb-3">
        <label for="website" class="form-label">Site internet</label>
        <input
            v-model="formData.website"
            type="url"
            class="form-control"
            id="website"
        >
      <template v-if="errors.website">
        <span v-text="errors.website[0]"></span>
      </template>
    </div>

    <div class="mb-3">
      <button type="button" class="btn btn-primary" v-on:click="createCompany">Ajouter</button>
    </div>

  </form>

</template>

<script setup>

  import { ref } from 'vue';
  import axios from 'axios';

  const errors = ref([]);

  const formData = ref({
    name: '',
    phone: '',
    website: '',
  });

  const createCompany = () => {

    axios.post('/api/companies', formData.value)
        .then((response) => {
          errors.value= {};
          console.log(response);
        })
        .catch((error) => {
          errors.value = error.response.data.errors;
        });

  }



</script>