import Api from '@/api/index';

class Collectors extends Api {

  collectors = () =>  this.rest('/collectors/list.json');

  collectorsFiltered = () =>  this.rest('/collectors/list-filtered.json');

  remove = ( id ) => this.rest('/collectors/delete-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify({ id }),
  }).then(() => id) // then - заглушка, пока метод ничего не возвращает

  add = ( collector ) => this.rest('/collectors/add-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(collector),
  }).then(() => ({...collector, id: new Date().getTime()})) // then - заглушка, пока метод ничего не возвращает

  update = ( collector ) => this.rest('/collectors/update-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(collector),
  }).then(() => collector) // then - заглушка, пока метод ничего не возвращает

}

export default new Collectors();
