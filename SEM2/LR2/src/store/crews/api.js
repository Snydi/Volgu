import Api from '@/api/index';

class Crews extends Api {

  /**
   * Вернет список всех групп
   * @returns {Promise<Response>}
   */

  crews = () => this.rest('/crews/list.json');

  remove = ( id ) => this.rest('/crews/delete-item',  {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify({ id }),
  }).then(() => id) // then - заглушка, пока метод ничего не возвращает

  add = ( crew ) => this.rest('/crews/add-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(crew),
  }).then(() => ({...crew, id: new Date().getTime()})) // then - заглушка, пока метод ничего не возвращает
  
  update = ( crew ) => this.rest('/crews/update-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(crew),
  }).then(() => crew) // then - заглушка, пока метод ничего не возвращает

}

export default new Crews();