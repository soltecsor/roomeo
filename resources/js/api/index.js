import axios from 'axios'

export default {  
  //Url da API
  serverURI: 'https://api.arthuronline.co.uk/v2',
  serverURILocal: 'http://localhost',

  request(method, uri, data = null, headers) {
    if (!method) {
      console.error('API function call requires method argument')
      return
    }

    if (!uri) {
      console.error('API function call requires uri argument')
      return
    }

    if (!headers) {
      console.error('API function call requires uri argument')
      return
    }
    
    var url = this.serverURI + uri

    const options = {
      method: method,
      headers: headers,
      data: data,
      url,
    };
    return axios(options)
  },

  requestLocal(method, uri, data = null, headers) {
    if (!method) {
      console.error('API function call requires method argument')
      return
    }

    if (!uri) {
      console.error('API function call requires uri argument')
      return
    }

    if (!headers) {
      console.error('API function call requires uri argument')
      return
    }
    
    var url = this.serverURILocal + uri

    const options = {
      method: method,
      headers: headers,
      data: data,
      url,
    };
    return axios(options)
  },

}