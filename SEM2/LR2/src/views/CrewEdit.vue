<template>
  <Layout :title="id ? 'Редактирование записи' : 'Создание записи'">
    <CrewForm
        :id="id"
        @submit="onSubmit"
    />
  </Layout>
</template>

<script>
import { useStore } from 'vuex';

import { updateItem, addItem } from '@/store/crews/selectors';
import Layout from '@/components/Layout/Layout';
import CrewForm from '@/components/CrewForm/CrewForm';
export default {
  name: 'GroupEdit',
  props: {
    id: String,
  },
  components: {
    Layout,
    CrewForm,
  },
  setup() {
    const store = useStore();
    return {
      onSubmit: ({ id, group, speciality }) => id ?
          updateItem(store, { id, group, speciality }) :
          addItem(store, { group, speciality }),
    };
  }
}
</script>

