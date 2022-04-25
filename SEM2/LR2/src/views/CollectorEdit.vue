<template>
  <Layout :title="id ? 'Редактирование записи' : 'Создание записи'">
    <CollectorForm @submit="onSubmit" :id="id"  />
  </Layout>
</template>

<script>
import { useStore } from 'vuex';

import { updateItem, addItem } from '@/store/collectors/selectors';
import CollectorForm from '@/components/CollectorForm/CollectorForm';
import Layout from '@/components/Layout/Layout';

export default {
  name: 'CollectorEdit',
  props: {
    id: String,
  },
  components: {
    Layout,
    CollectorForm,
  },
  setup() {
    const store = useStore();
    return {
      onSubmit: ({ id, name, surname, patronymic, group }) => id ?
          updateItem(store, { id, name, surname, patronymic, group }) :
          addItem(store, { name, surname, patronymic, group } )
    }
  }

}
</script>

