<template>
  <table class="table table-striped table-bordered">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Téléphone</th>
    </tr>
    </thead>
    <tbody>
      <tr v-for="company in companies">
          <th scope="row">{{ company.id }}</th>
          <td>{{ company.name }}</td>
          <td>{{ company.phone }}</td>
        </tr>
    </tbody>
  </table>
</template>

<script setup>
  import { ref } from 'vue';

  const companies = ref([]);

  const loadCompanies = () => {
    axios.get('/api/companies')
      .then((response) => companies.value = response.data.data)
      .catch((error) => console.log(error))
  }

  loadCompanies();

</script>