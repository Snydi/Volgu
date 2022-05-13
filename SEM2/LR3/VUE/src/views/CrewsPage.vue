<template>
  <Layout title="Бригады">
    <CrewList />
  </Layout>
</template>

<script>
import Layout from '@/components/Layout/Layout';
import CrewList from '@/components/CrewList/CrewList';

export default {
  name: 'CrewsPage',
  components: {
    Layout,
    CrewList,
  }
}
</script>
