var urlPart = window.location.href.split('/');
var url = urlPart[0] + '//' + urlPart[2] + '/wp-content/themes/vinaphone';
var errorMessage = 'Hệ thống đang bận, quý khách vui lòng thử lại sau';

function viettelModal(goi_cuoc, gia_cuoc, chu_ky, luu_luong) {
    $('#packageNamePopup').text(goi_cuoc);
    $('#data3gPopup').text(luu_luong);
    $('#packagePricePopup').text(gia_cuoc);
    $('#packageUseTimePopup').text(chu_ky);
}

function checkPhone() {
    var phone = $('#txtPhone').val();
    if (!validatePhone(phone)) {
        $('#txtPhone').css('border-color', 'red');
        $('#phoneWarning').html('Số điện thoại chỉ được nhập số');
        return false
    } else if (phone.length !== 10) {
        $('#txtPhone').css('border-color', 'red');
        $('#phoneWarning').html('Số điện thoại có độ dài là 10');
        return false
    } else {
        var packageCode = $('#packageNamePopup').text();
        //getListPackagesEstio(phone, packageCode);
        inviteUser(phone, packageCode, true);
        $('#txtPhone').css('border-color', '');
        $('#phoneWarning').html('');
        return true
    }
}

function validatePhone(phone) {
    var re = /^[0-9]*$/;
    return re.test(phone)
}

function getListPackagesEstio(msisdn, packageCode, type) {
    show_loading();
    $.ajax({
        type: 'GET',
        url: url + '/api/GetListPackagesEstio.php',
        data: {msisdn: msisdn, packageCode: packageCode},
        success:function(data) {
            detectBadGateway(data);
            $('#packageWarning').html('');
            var result = JSON.parse(data);
            if (result['code'] === 1) {
                if (result['statusInvite'] === true) {
                    inviteUser(msisdn, packageCode, true);
                } else {
                    getListPackagesVas(result['services'], packageCode, type);
                }
            } else {
                hide_loading();
                alert(errorMessage)
            }
        }
    });
}

function getListPackagesVas(aryPackages, packageCode, type) {
    $.ajax({
        type: 'POST',
        url: url + '/api/GetListPackagesVas.php',
        data: {aryPackages: aryPackages},
        success:function(data) {
            hide_loading();
            var aryPackages = JSON.parse(data)['data'];
            if (aryPackages.length !== 0) {
                if (type === true) {
                    $('#packageWarning').html('Thuê bao của quý khách không đủ điều kiện để đăng ký gói ' + packageCode + '. Quý khách vui lòng chọn gói cước bên dưới để đăng ký');
                }
                $('#allowPackage').html('').append("<div class='row text-center' style='border-bottom: 1px solid #ddd; padding: 10px 0 10px'><p class='col-md-2'>Tên gói cước</p><p class='col-md-6'>Nội dung gói cước</p><p class='col-md-2'>Giá KM</p><div class='col-md-2'></div></div>");
                aryPackages.forEach(function (i) {
                    $('#allowPackage').append("<div class='row' style='border-bottom: 1px solid #ddd; padding: 10px 0 10px'><p class='col-md-2 text-center'>" + i['code'] + "</p><p class='col-md-6 text-left text-justify'>" + i['description'] + "</p><p class='col-md-2 text-center'>" + i['salePrice'] + "</p><div class='col-md-2 text-center'><button class='btn btn-info allowPackage' code='" + i['code'] + "'>Đăng ký</button></div>");
                })
            }
        }
    })
}

function inviteUser(msisdn, serviceCode, type) {
    show_loading();
    $.ajax({
        type: 'GET',
        url: url + '/api/InviteUser.php',
        data: {msisdn: msisdn, serviceCode: serviceCode},
        success:function(data) {
            hide_loading();
            detectBadGateway(data);
            var result = JSON.parse(data);
            insertUser(result['txn_id'], msisdn, serviceCode, result['code'], result['message']);
            if (result['code'] === 1) {
                alert('Quý khách vui lòng xác nhận đăng ký gói ' + serviceCode + ' cho số thuê bao ' + msisdn + ' trên điện thoại')
            } else {
                //alert(errorMessage)
                if (type !== null) {
                    getListPackagesEstio(msisdn, serviceCode, type)
                } else {
                    alert(errorMessage)
                }
            }
        }
    });
}

function insertUser(transId, msisdn, serviceName, status, message) {
    $.ajax({
        type: 'POST',
        url: url + '/api/insertUser.php',
        data: {transId: transId, msisdn: msisdn, serviceName: serviceName, status: status, message: message},
        success:function(data) {

        }
    });
}

$(document).on('click', '.allowPackage', function () {
    show_loading();
    var msisdn = $('#txtPhone').val();
    var code = $(this).attr('code');
    inviteUser(msisdn, code, null)
});

$("#basicModal").on('hidden.bs.modal', function(){
    $('#txtPhone').val('').css('border-color', '');
    $('#phoneWarning').html('');
    $('#allowPackage').html('');
    $('#packageWarning').html('')
});

function detectBadGateway(response) {
    if (response.indexOf('html') > -1) {
        alert(errorMessage)
    }
}

function show_loading() {
    $("div#divLoading").addClass('show');
}

function hide_loading() {
    $("div#divLoading").removeClass('show');
}