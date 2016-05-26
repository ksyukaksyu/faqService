/**
 * Created by ksyukaksyu on 23.05.16.
 */
$( document ).ready(function() {
    $('body').scrollspy({
        target: '.bs-docs-sidebar',
        offset: 100
    });
});

function questionFilter_setCategory(id) {
    $('select[name="QuestionsSearch[id_category]"]').val(id).change();
}