//var context = $('#upload-canvas')[0].getContext('2d');
$(document).ready(function(){
    checkRequirement();
    $('#step-1').show();
    $('#step-2').hide();
    $('#step-3').hide();
});

var oriContext;

$('#file-uploader').change(function(){
    var input = this;

    var oldUploadButtonText = $('#btn-upload').html();
    $('#btn-upload').prop('disabled', true).html('กำลังอัพโหลด รอสักครู่นะ...').addClass('disabled');
        if (input.files && input.files[0]) {

        if(!input.files[0].type.match('image/jp.*') && !input.files[0].type.match('image/png')) {
            swal('มีอะไรบางอย่างไม่ถูกต้องแหละ!', 'กรุณาอัพโหลดภาพสกุล .jpg หรือ .png เท่านั้นนะ', 'error');
            $('#btn-upload').prop('disabled', false).html(oldUploadButtonText).removeClass('disabled');
            return;
        }
        
        var reader = new FileReader();

        reader.onload = (function (file) {
            return function(e) {
                var img = new Image();
                img.src = e.target.result;
                img.onload = function() {
                    swal('อัพโหลดภาพเสร็จแล้ว!', 'จากนั้นมาปรับขนาดของภาพกันนะ ลองเลย รออะไรอยู่!', 'success');

                    var width = img.width;
                    var height = img.height;

                    var MAX_WIDTH = 1024;
                    var MAX_HEIGHT = 1024;

                    if (width > height) {
                        if (height > MAX_HEIGHT) {
                            width *= MAX_HEIGHT / height;
                            height = MAX_HEIGHT;
                        }
                    } else {
                        if (width > MAX_WIDTH) {
                            height *= MAX_WIDTH / width;
                            width = MAX_WIDTH;
                        }
                    }

                    var canvas = document.createElement("canvas");
                    canvas.width = width;
                    canvas.height = height;
                    var ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0, width, height);

                    var dataurl = canvas.toDataURL();

                    $('#step-1').hide();
                    $('#step-2').show();

                    $('#img-preview').cropper('reset').cropper('replace', dataurl).cropper('setAspectRatio', 1);
                    $('#img-preview').show();
                }
            };

        })(input.files[0]);
        reader.readAsDataURL(input.files[0]);
    } else {
        swal('ขอโทษด้วยนะ', 'อัพโหลดภาพไม่ได้ครับ ลองอัพใหม่อีกครั้งนะ', 'error');
        $('#btn-upload').prop('disabled', false).html(oldUploadButtonText).removeClass('disabled');
    }
});

$('#btn-to-step-3').click(function(){
    $('#step-2').hide();
    var destContext = $('#img-canvas')[0].getContext('2d');
    oriContext = $('#img-preview').cropper('getCroppedCanvas');
    var srcContext = $('#img-preview').cropper('getCroppedCanvas');
    destContext.drawImage(srcContext, 0, 0, $('#img-canvas')[0].width, $('#img-canvas')[0].height);
    $('#btn-download').prop('disabled', true);
    $('#step-3').show();
    var $root = $('html, body');
    $root.animate({
        scrollTop: $('#step-3 h2').offset().top - 40
    }, 300);
});


$('#btn-download').click(function(){
    var img = $('#img-canvas')[0].toDataURL("image/png"); 
    ReImg.fromCanvas(document.getElementById('img-canvas')).downloadPng();
});

function overlayImage(type) {
    $('#loading').show();
    var filename = 'img/overlay/';
    switch (type) {
        case 'etc-1':  filename += 'etc/9chang.png'; break;
        case 'etc-2':  filename += 'etc/bundit.png'; break;
        case 'etc-3':  filename += 'etc/effectiveteam.png'; break;
        case 'etc-4':  filename += 'etc/eng.png'; break;
        case 'etc-5':  filename += 'etc/fan.png'; break;
        case 'etc-6':  filename += 'etc/pat3.png'; break;
        case 'etc-7':  filename += 'etc/shop.png'; break;
        case 'etc-8':  filename += 'etc/tobe.png'; break;
        case 'etc-9':  filename += 'etc/fanfan.png'; break;
        case 'etc-10': filename += 'etc/nai.png'; break;
        case 'etc-11': filename += 'etc/strong.png'; break;
        case 'etc-12': filename += 'etc/vidwantfan.png'; break;
        case 'etc-13': filename += 'etc/what.png'; break;
        case 'etc-14': filename += 'etc/handsome.png'; break;
        case 'etc-15': filename += 'etc/beauty.png'; break;
        case 'etc-16': filename += 'etc/singlevidva.png'; break;
        case 'etc-17': filename += 'etc/lonely.png'; break;
        case 'etc-18': filename += 'etc/wannabevidva.png'; break;
        case 'ce':     filename += 'major/ce.png'; break;
        case 'ee':     filename += 'major/ee.png'; break;
        case 'me':     filename += 'major/me.png'; break;
        case 'ae':     filename += 'major/ae.png'; break;
        case 'mr':     filename += 'major/mr.png'; break;
        case 'ie':     filename += 'major/ie.png'; break;
        case 'mt':     filename += 'major/mt.png'; break;
        case 'pe':     filename += 'major/pe.png'; break;
        case 'mn':     filename += 'major/mn.png'; break;
        case 'sv':     filename += 'major/sv.png'; break;
        case 'env':    filename += 'major/env.png'; break;
        case 'cp':     filename += 'major/cp.png'; break;
        case 'che':    filename += 'major/che.png'; break;
        case 'nano':   filename += 'major/nano.png'; break;
        case 'adme':   filename += 'major/adme.png'; break;
        case 'ice':    filename += 'major/ice.png'; break;
        case 'aero':   filename += 'major/aero.png'; break;
        case 'club-1': filename += 'club/clique.png'; break;
        case 'club-2': filename += 'club/eic.png'; break;
        case 'club-3': filename += 'club/esac.png'; break;
        case 'club-4': filename += 'club/fe.png'; break;
        case 'club-5': filename += 'club/formula.png'; break;
        case 'club-6': filename += 'club/lg.png'; break;
        case 'club-7': filename += 'club/thinc.png'; break;
        case 'club-8': filename += 'club/vata.png'; break;
        case 'club-9': filename += 'club/vesc.png'; break;
    }
    var destContext = $('#img-canvas')[0].getContext('2d');
    destContext.drawImage(oriContext, 0, 0, $('#img-canvas')[0].width, $('#img-canvas')[0].height);
    if (filename != 'img/overlay/') {
        var img = new Image();
        img.src = filename;
        img.onload = function() {
            destContext.drawImage(img, 0, 0, $('#img-canvas')[0].width, $('#img-canvas')[0].height);
        }
        $('#btn-download').prop('disabled', false);
    }
    $('#loading').hide();
    var $root = $('html, body');
    $root.animate({
        scrollTop: $('#step-3').offset().top - 40
    }, 300);
}

function checkRequirement() {
    if (!(window.File && window.FileReader)) {
        swal('ขอโทษด้วยนะ', 'เราพบว่า browser ของคุณไม่สามารถใช้งานเว็บของเราได้ ลองเปลี่ยน browser แล้วเข้ามาใหม่นะ ขออภัยอีกครั้งครับ', 'error');
        $('#btn-upload').prop('disabled', true).html('ขออภัยด้วย browser ของคุณไม่สามารถใช้งานได้').addClass('disabled');
    }
}

$('#btn-team-etc-1').click(function(){ overlayImage('etc-1') });
$('#btn-team-etc-2').click(function(){ overlayImage('etc-2') });
$('#btn-team-etc-3').click(function(){ overlayImage('etc-3') });
$('#btn-team-etc-4').click(function(){ overlayImage('etc-4') });
$('#btn-team-etc-5').click(function(){ overlayImage('etc-5') });
$('#btn-team-etc-6').click(function(){ overlayImage('etc-6') });
$('#btn-team-etc-7').click(function(){ overlayImage('etc-7') });
$('#btn-team-etc-8').click(function(){ overlayImage('etc-8') });
$('#btn-team-etc-9').click(function(){ overlayImage('etc-9') });
$('#btn-team-etc-10').click(function(){ overlayImage('etc-10') });
$('#btn-team-etc-11').click(function(){ overlayImage('etc-11') });
$('#btn-team-etc-12').click(function(){ overlayImage('etc-12') });
$('#btn-team-etc-13').click(function(){ overlayImage('etc-13') });
$('#btn-team-etc-14').click(function(){ overlayImage('etc-14') });
$('#btn-team-etc-15').click(function(){ overlayImage('etc-15') });
$('#btn-team-etc-16').click(function(){ overlayImage('etc-16') });
$('#btn-team-etc-17').click(function(){ overlayImage('etc-17') });
$('#btn-team-etc-18').click(function(){ overlayImage('etc-18') });
$('#btn-team-ce').click(function(){ overlayImage('ce') });
$('#btn-team-ee').click(function(){ overlayImage('ee') });
$('#btn-team-me').click(function(){ overlayImage('me') });
$('#btn-team-ae').click(function(){ overlayImage('ae') });
$('#btn-team-mr').click(function(){ overlayImage('mr') });
$('#btn-team-ie').click(function(){ overlayImage('ie') });
$('#btn-team-mt').click(function(){ overlayImage('mt') });
$('#btn-team-pe').click(function(){ overlayImage('pe') });
$('#btn-team-mn').click(function(){ overlayImage('mn') });
$('#btn-team-sv').click(function(){ overlayImage('sv') });
$('#btn-team-env').click(function(){ overlayImage('env') });
$('#btn-team-cp').click(function(){ overlayImage('cp') });
$('#btn-team-che').click(function(){ overlayImage('che') });
$('#btn-team-nano').click(function(){ overlayImage('nano') });
$('#btn-team-adme').click(function(){ overlayImage('adme') });
$('#btn-team-ice').click(function(){ overlayImage('ice') });
$('#btn-team-aero').click(function(){ overlayImage('aero') });
$('#btn-team-club-1').click(function(){ overlayImage('club-1') });
$('#btn-team-club-2').click(function(){ overlayImage('club-2') });
$('#btn-team-club-3').click(function(){ overlayImage('club-3') });
$('#btn-team-club-4').click(function(){ overlayImage('club-4') });
$('#btn-team-club-5').click(function(){ overlayImage('club-5') });
$('#btn-team-club-6').click(function(){ overlayImage('club-6') });
$('#btn-team-club-7').click(function(){ overlayImage('club-7') });
$('#btn-team-club-8').click(function(){ overlayImage('club-8') });
$('#btn-team-club-9').click(function(){ overlayImage('club-9') });

$('#btn-rotate-ccw').click(function(){ $('#img-preview').cropper('rotate', -90); });
$('#btn-rotate-cw').click(function(){ $('#img-preview').cropper('rotate', 90); });