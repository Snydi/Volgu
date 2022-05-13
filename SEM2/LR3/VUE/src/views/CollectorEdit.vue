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
      onSubmit: ({ id, name, birth_date, characteristic, id_crew, img_path}) => id ?
          updateItem(store, { id, img_path, name, birth_date, characteristic, id_crew }) :
          addItem(store, { name,img_path, birth_date, characteristic, id_crew } )
    }
  }

}
</script>

