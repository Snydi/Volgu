<template>
  <Layout title="Сборщики">
    <CollectorList />
  </Layout>
</template>

<script>
import Layout from '@/components/Layout/Layout';
import CollectorList from '@/components/CollectorList/CollectorList';

export default {
  name: 'CollectorsPage',
  components: {
    Layout,
    CollectorList,
  }
}
</script>
