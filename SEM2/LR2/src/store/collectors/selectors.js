export const fetchItems = (store) => {
  const { dispatch } = store;
  dispatch('collectors/fetchItems');
};
export const fetchFiltered = (store) => {
  const { dispatch } = store;
  dispatch('collectors/fetchFiltered');
};

export const selectItems = (store) => {
  const { getters } = store;
  return getters['collectors/items']
}

export const removeItem = (store, id) => {
  const { dispatch } = store;
  dispatch('collectors/removeItem', id);
}

export const addItem = (store, { name, surname, patronymic, group }) => {
  const { dispatch } = store;
  dispatch('collectors/addItem', { name, surname, patronymic, group });
}

export const updateItem = (store, { id, name, surname, patronymic, group }) => {
  const { dispatch } = store;
  dispatch('collectors/updateItem', { id, name, surname, patronymic, group });
}

export const selectItemById = (store, id) => {
  const { getters } = store;
  return getters['collectors/itemsByKey'][id] || {};
}
