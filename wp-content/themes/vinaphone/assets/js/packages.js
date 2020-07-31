var urlPart = window.location.href.split('/');
var url = urlPart[0] + '//' + urlPart[2] + '/wp-content/themes/vinaphone';
var errorMessage = 'Hệ thống đang bận, quý khách vui lòng thử lại sau';

function validate() {
    if (!checkPhone() || !checkCaptcha()) {
        checkPhone();
        checkCaptcha();
    } else {
        var phone = $('#phone').val();
        getListPackagesAvailable(phone)
    }
}

function checkPhone() {
    var flag = true;
    var phone = $('#phone').val();
    var message = 'Số điện thoại không đúng định dạng';
    if (!validatePhone(phone)) {
        $('#phone').css('border-color', 'red');
        $('#phoneWarning').html(message);
        flag = false
    } else if (phone.length !== 10) {
        $('#phone').css('border-color', 'red');
        $('#phoneWarning').html(message);
        flag = false
    } else {
        $('#phone').css('border-color', '');
        $('#phoneWarning').html('');
    }
    return flag
}

function validatePhone(phone) {
    var re = /^[0-9]*$/;
    return re.test(phone)
}

function checkCaptcha() {
    var flag = true;
    var captcha = $('#captcha').val();
    $.ajax({
        type: 'GET',
        url: url + '/captcha/check-captcha.php',
        async: false,
        data: {captcha: captcha},
        success:function(data) {
            if (data == 1) {
                $('#captcha').css('border-color', '');
                $('#captchaWarning').html('');
            } else {
                $('#captcha').css('border-color', 'red');
                $('#captchaWarning').html('Mã xác thực không đúng');
                flag = false
            }
        }
    });
    console.log(flag);
    return flag
}

function getListPackagesAvailable(msisdn) {
    show_loading();
    $.ajax({
        type: 'GET',
        url: url + '/api/GetListPackagesAvailable.php',
        data: {msisdn: msisdn},
        success:function(data) {
            hide_loading();
            $('#warning').html('');
            $('#packagesForm').empty();
            var aryPackages = JSON.parse(data)['data'];
            if (aryPackages.length !== 0) {
                $('#warning').html('Thuê bao của quý khách đủ điều kiện để đăng ký gói trong danh sách dưới đây. Quý khách vui lòng chọn gói cước để đăng ký');
                $('#packagesForm').append(createPackagesHTML(aryPackages))
            }
        }
    })
}

function createPackagesHTML(aryPackages) {
    var packagesHTML = '';
    aryPackages.forEach(function (i) {
        var day = '';
        var salePrice = numberWithCommas(i["salePrice"]) + "đ";
        var indexOfDay = i["description"].indexOf("ngay");
        if (indexOfDay !== -1) {
            var string = i["description"].substr(indexOfDay - 4, 3);
            string = string.replace(/^\D+/g, "");
            day = day + "/" + string + " ngày";
        }
        packagesHTML += '<div class="col-sm-6 text-left">\n' +
            '            <table class="table table-responsive table-striped">\n' +
            '                <thead>\n' +
            '                <tr>\n' +
            '                    <td class="name text-center" colspan="2">' + i["code"] + '</td>\n' +
            '                </tr>\n' +
            '                </thead>\n' +
            '                <tbody>\n' +
            '                <tr>\n' +
            '                    <td width="30%">Giá cước</td>\n' +
            '                    <td>' + salePrice + day + '</td>\n' +
            '                </tr>\n' +
            '                <tr>\n' +
            '                    <td>Nội dung gói cước</td>\n' +
            '                    <td>' + i["description"] + '</td>\n' +
            '                </tr>\n' +
            '                <tr>\n' +
            '                    <td>Giá khuyến mãi</td>\n' +
            '                    <td>' + salePrice + '</td>\n' +
            '                </tr>\n' +
            '                <tr>\n' +
            '                    <td colspan="2" class="text-center"> <button class="btn btn-sm btn-dangky" code="' + i['code'] + '">Đăng ký</button></td>\n' +
            '                </tr>\n' +
            '                </tbody>\n' +
            '            </table>\n' +
            '        </div>';
    });
    return packagesHTML;
}

function inviteUser(msisdn, serviceCode) {
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
                alert(errorMessage)
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

$(document).on('click', '.btn-dangky', function () {
    var msisdn = $('#phone').val();
    var code = $(this).attr('code');
    inviteUser(msisdn, code)
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

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