/**
 * http://usejsdoc.org/
 */
import {bootstrap}    from 'angular2/platform/browser';
import {Component} from 'angular2/core';

@Component({
    selector: 'my-app',
    template: '<h1>MHola capullo</h1>'
})


export class AppComponent { }


bootstrap(AppComponent);