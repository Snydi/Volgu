class Api {
  constructor() {
    this.base = '/rest';
  }

  request = async (method, options) => {
    const url = 'http://localhost/volgu/sem2/lr3/api/rest/index.php' + method;
    return fetch(url, options)
  }

  rest = async (method, options) => {
    return this.request(method, options)
      .then((data) => data);
  }

}

export default Api;
