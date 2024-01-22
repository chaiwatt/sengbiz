import * as RequestApi from './request.js';

var token = window.params.token

$(document).on('change', '#mainCategory', function (e) {
    var mainCategoryId = $(this).val();
    var subCategoryUrl = window.params.subCategoryRoute
    $('#sub_minor_category_container').css('display', 'none'); 
    var data = {
        'mainCategoryId': mainCategoryId
    }

    RequestApi.postRequest(data, subCategoryUrl, token).then(response => {
        if (response !== "") {
            $('#sub_category_container').css('display', '');
            $('#sub_category_container').html(response);
        } else {
            $('#sub_category_container').css('display', 'none'); 
        }
    }).catch(error => { })
});

$(document).on('change', '#subCategory', function (e) {
    var subCategoryId = $(this).val();
    var subMinorCategoryUrl = window.params.subMinorCategoryRoute

    var data = {
        'subCategoryId': subCategoryId
    }

    RequestApi.postRequest(data, subMinorCategoryUrl, token).then(response => {
        if (response !== "") {
            $('#sub_minor_category_container').css('display', '');
            $('#sub_minor_category_container').html(response);
        } else {
            console.log('aaa');
            $('#sub_minor_category_container').css('display', 'none'); 
        }
    }).catch(error => { })
});

$(document).on('change', '#province', function (e) {
    var provinceId = $(this).val();
    var amphurUrl = window.params.amphurRoute

    var data = {
        'provinceId': provinceId
    }

    RequestApi.postRequest(data, amphurUrl, token).then(response => {
        if (response !== "") {
            $('#amphur_container').css('display', '');
            $('#amphur_container').html(response);
        } else {
            $('#amphur_container').css('display', 'none'); 
        }
    }).catch(error => { })
});
