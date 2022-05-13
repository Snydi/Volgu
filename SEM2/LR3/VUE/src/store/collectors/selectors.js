export const fetchItems = (store) => {
  const { dispatch } = store;
  dispatch('collectors/fetchItems');
};
export const selectItems = (store) => {
  const { getters } = store;
  return getters['collectors/items']
}
export const fetchFiltered = (store, id) => {
  const { dispatch } = store;
  dispatch('collectors/fetchFiltered', id);
}
export const removeItem = (store, id) => {
  const { dispatch } = store;
  dispatch('collectors/removeItem', id);
}

export const addItem = (store, { name, img_path, birth_date, characteristic, id_crew }) => {
  const { dispatch } = store;
  dispatch('collectors/addItem', { name, img_path, birth_date, characteristic, id_crew });
}

export const updateItem = (store, { id, img_path, name, birth_date, characteristic, id_crew }) => {
  const { dispatch } = store;
  dispatch('collectors/updateItem', { id,img_path, name, birth_date, characteristic, id_crew });
}

export const selectItemById = (store, id) => {
  const { getters } = store;
  return getters['collectors/itemsByKey'][id] || {};
}
