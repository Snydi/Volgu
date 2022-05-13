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
  name: 'CrewEdit',
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
      onSubmit: ({ id, crew }) => id ?
          updateItem(store, { id, crew }) :
          addItem(store, { crew }),
    };
  }
}
</script>

