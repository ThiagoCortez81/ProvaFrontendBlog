import { environment } from './../../../environment';

const API_URL = environment.apiUrl;

export class ApiService {

    get(url, data) {
        return this.request('GET', url, data);
    }

    post(url, data) {
        return this.request('POST', url, data);
    }

    put(url, data) {
        return this.request('PUT', url, data);
    }

    delete(url) {
        return this.request('DELETE', url);
    }

    request(method, path, data = {}) {
        var dfd = $.Deferred();

        $.ajax(API_URL + path, {
            method: method,
            data: data,
            dataType: 'json'
        }).then((response) => {
            dfd.resolve(response);
        },(err) => {
            dfd.reject(err.responseJSON);
        });

        return dfd.promise();
    }
}
