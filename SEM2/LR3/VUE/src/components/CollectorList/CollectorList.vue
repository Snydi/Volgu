<template>
  <div :class="$style.root">

    <Table
      :headers="[
        {value: 'photo', text: 'Фото'},
        {value: 'name', text: 'ФИО'},
        {value: 'birth_date', text: 'Дата рождения'},
        {value: 'characteristic', text: 'Характеристика'},
        {value: 'crew', text: 'Бригада'},
        {value: 'control', text: 'Действие'},
      ]"

      :items="items"
    >
      <template v-slot:photo="{ item }">
        <img style="height:150px;width:150px;"  :src="'https://localhost/Volgu/SEM2/LR3/API/inc/images/' + item.img_path">
      </template>

      <template v-slot:control="{ item }">
        <Btn @click="onClickEdit(item.id)" theme="info">Изменить</Btn>
        <Btn @click="onClickRemove(item.id)" theme="danger">Удалить</Btn>
      </template>
    </Table>
    <router-link :to="{ name: 'CollectorEdit' }">
      <Btn :class="$style.create" theme="info">Создать</Btn>
    </router-link>
  </div>
  <Btn v-if="$route.params.id" @click="onClickClear()" theme="danger" > Очистить фильтр </Btn>
</template>

<script>
import { useStore } from 'vuex';
import {computed,onMounted} from 'vue';
import { useRouter } from 'vue-router';
import { useRoute } from "vue-router";
import { selectItems, removeItem, fetchFiltered,fetchItems } from '@/store/collectors/selectors';
import Table from '@/components/Table/Table';
import Btn from '@/components/Btn/Btn';
export default {
  name: 'CollectorList',
  components: {
    Table,
    Btn,
  },
  setup() {
    const store = useStore();
    const router = useRouter();
    const route = useRoute();

    onMounted(() => {

      if (typeof route.params.id !== "undefined") {
        fetchFiltered(store,  route.params.id);
      }
      else
      {
        fetchItems(store);
      }

    });

    return {

      items: computed(() => selectItems(store)),
      onClickRemove: id => {
        const isConfirmRemove = confirm('Вы действительно хотите удалить запись?')
        if (isConfirmRemove) {
          removeItem(store, id)
        }
      },
      onClickEdit: id => {
        router.push({ name: 'CollectorEdit', params: { id } })
      },
      onClickClear() {
        router.push({ name: 'Collectors' });
        fetchItems(store);
      }

      }
    },

}

</script>

<style module lang="scss">
.root {

  .create {
    margin-top: 16px;
    text-align: center;
  }

}
</style>
