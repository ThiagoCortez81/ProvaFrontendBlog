import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment';
import { Http, Response } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import 'rxjs/add/observable/throw';

const API_URL = environment.apiUrl;

@Injectable()
export class ApiService {

    constructor(private http: Http) {

    }

    public get(url) {
        return this.http
            .get(API_URL + url)
            .map(res => res.json())
            .catch(this.handleError);
    }

    public post(url, data) {
        return this.http
            .post(API_URL + url, data)
            .map(res => res.json())
            .catch(this.handleError);
    }

    public delete(url) {
        return this.http
            .delete(API_URL + url)
            .map(res => null)
            .catch(this.handleError);
    }

    private handleError(error: Response | any) {
        console.error('ApiService::handleError', error);
        return Observable.throw(error);
    }

}