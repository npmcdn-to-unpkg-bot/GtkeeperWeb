/**
 * http://usejsdoc.org/
 */
import {bootstrap}    from 'angular2/platform/browser';
import {Component} from 'angular2/core';
import {searchItem} from 'teva/controls/searchItem';

@Component({
    selector: 'my-app',
    directives: [searchItem],
    template: '<h1>Cargada app</h1>'
})

export class AppComponent { }
bootstrap(AppComponent);