
// PLUGINS:
import $ from 'jquery';
import './components/jQuery';
// JQUERY FUNC-S 'next()' and 'prev()' launch on cirlce:
$.fn.oldNext = $.fn.next;
$.fn.next = function(selector){
    var selector = selector || '';
    return this.oldNext(selector).length ? this
    .oldNext(selector) : this
    .siblings(selector)
    .addBack(selector)
    .first();
};
$.fn.oldPrev = $.fn.prev;
$.fn.prev = function(selector){
    var selector = selector || '';
    return this.oldPrev(selector).length ? this
    .oldPrev(selector) : this
    .siblings(selector)
    .addBack(selector)
    .last();
};
// PLUGINS:
import './plugins/jquery-ui.min'
import './plugins/jquery-touch-punch.min'
import './plugins/slick.min'
// PARTS:

import './components/mobMenu';
import './components/titlePup';
import './components/slideBarMasters';
import './components/burberServices';
import './components/burbersGallery';