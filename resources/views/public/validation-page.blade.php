<!DOCTYPE html>
<html lang="ar">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="موقع عمالة تارودانت">
    <meta name="author" content="وزارة الداخلية">
    <title>موقع عمالة تارودانت</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap-theme/public-style.css') }}">
    
    <style>
        html{
            max-width: 100%;
        }
        html, body{
            overflow-x: hidden;
            overflow-y: auto;
        }
        body{
            width: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        .maghribi {
            font-family: 'Mossad' !important;
        }
        label {
            font-weight : bold;
        }
        /* body.swal2-shown, body.modal-open {
            padding-right: 0 !important; 
        }*/
    </style>
    <link rel="stylesheet" href="{{ asset('fa/all.min.css')}}">
</head>
<body dir="rtl">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h4 class="mb-0 mossad hide-mobile">المملكة المغربية</h4>
                    <img src="{{ asset('daam-template/emblem-maroc.png')}}" alt="شعار المملكة المغربية">
                    <h4 class="mossad">وزارة الداخلية</h4>
                    <h4 class="mossad  hide-mobile">عمالة إقليم تارودانت</h4>
                </div>
                <!-- <div class="col-md-3 col-6 mobile"><img class="Carte" src="{{ asset('daam-template/carte.svg')}}" width="120" alt=""></div> -->
                <div class="col-md-6 text-center">
                    <br>
                    <h2 class="mt-2 mossad ">
                        عمالة إقليم تارودانت
                    </h2>
                    <h2 class="mb-2 mossad">
                        موقع جحز المواعيد الادارية للمرتفقين
                    </h2>
                </div>
                <!-- <div class="col-md-3 desktop">
                    <img class="Carte" src="{{ asset('daam-template/placeholder.png')}}" alt="">
                    <h1>عمالة إقليم تارودانت</h1>
                </div> -->
            </div>
        </div>
    </header>

<div class="row bg-dark">
&nbsp;
</div>

<div class="modal" tabindex="-1" role="dialog" id="wiqaytna" dir="ltr">
  <div class="modal-dialog " role="document"> <!-- modal-lg -->
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title ">استعمل وقايتنا وساعد في وقف انتشار الفيروس</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body text-center">
          <img id="wiqaytna-img" src="{{ asset('./bootstrap-theme/wiqaytna.jpg')}}" alt="">
          <hr>
          <div class="row">
              <div class="col-6">
                  <a href="https://apps.apple.com/us/app/وقايتنا/id1512666410?l=ar&amp;ls=1" target="_blank">
                      <img src="{{ asset('./bootstrap-theme/app-store-btn.png')}}" alt="">
                  </a>
              </div>
              <div class="col-6">
                  <a href="https://play.google.com/store/apps/details?id=covid.trace.morocco&amp;hl=ar" target="_blank">
                      <img src="{{ asset('./bootstrap-theme/google-play-btn.png')}}" alt="">
                  </a>
              </div>
          </div>
      </div>
      <div class="modal-footer justify-content-center">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>

<main role="main" class="mt-5 mb-5 container" dir="rtl">

    <div class="row">
        <!-- <div class="col-md-3"></div> -->
        <h5 class="text-center mb-4">
            يقدم هذا الموقع خدمة حجز موعد بأحد اقسام او مصالح عمالة اقليم تارودانت، وذلك في إطار الجهود المبذولة من أجل الحد من انتشار وباء كورونا-كوفيد 19 و الحرص على استمرارية مصالح هذه العمالة في تقديم خدماتها للمرتفقين مع العمل على الحفاظ على صحة وسلامة الموظفين والمرتفقين.
        </h5>
                
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header bg-dark text-white text-right">
                    <i class="far fa-calendar-check"></i>
                    &nbsp;
                    المرجو التحقق من المعلومات التي ادخلتموها
                </h5>
                <div class="card-body text-right">
                    
                    <form id="form-demande-rdvs-citoyen" action="" method="POST" data-parsley-validate
                            data-parsley-required-message="المرجو ادخال المعلومات المطلوبة" 
                            data-parsley-trigger="focusout" >
                            <!-- enctype="multipart/form-data" -->
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="penom">الاسم الشخصي<em class="text-danger"> *</em></label>
                                <input type="text" 
                                        class="form-control ToAR"
                                        data-parsley-error-message="المرجو ادخال الاسم الشخصي" 
                                        data-parsley-minlength="3" data-parsley-minlength-message="المرجو ادخال اسم صحيح"
                                        id="prenom" name="prenom" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="nom">الاسم العائلي<em class="text-danger"> *</em></label>
                                <input type="text" class="form-control ToAR" 
                                        data-parsley-error-message="المرجو ادخال الاسم العائلي" 
                                        data-parsley-minlength="3" data-parsley-minlength-message="المرجو ادخال اسم صحيح"
                                        id="nom" name="nom" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="cnie">رقم البطاقة الوطنية للتعريف <em class="text-danger"> *</em></label>
                                <input type="text" class="form-control" 
                                        data-parsley-type="alphanum"
                                        data-parsley-error-message="المرجو ادخال رقم البطاقة الوطنية" 
                                        data-parsley-minlength="4" data-parsley-minlength-message="المرجو ادخال رقم البطاقة الوطنية"
                                        id="cnie" name="cnie" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="email">البريد الالكتروني</label>
                                <input type="email" class="form-control" dir="ltr"
                                        data-parsley-type-message="المرجو ادخال بريد الكتروني صحيح"
                                        id="email" name="email">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="tel">رقم الهاتف<em class="text-danger"> *</em></label>
                                <input type="text" class="form-control" 
                                        data-parsley-pattern="^0[5-7]\d{8}" data-parsley-pattern-message="المرجو ادخال رقم هاتف صحيح" 
                                        id="tel" name="tel" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="objet">الموضوع<em class="text-danger"> *</em></label>
                                <textarea type="text" class="form-control ToAR" 
                                        data-parsley-required-message="المرجو تحديد موضوع طلب الموعد" 
                                        id="objet" name="objet" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="entite">القسم/المصلحة<em class="text-danger"> *</em></label>
                                <select type="text" class="form-control" 
                                        data-parsley-required-message="المرجو اختيار القسم أو المصلحة" 
                                        id="entite" name="entite_id" required>
                                    <option value="" disabled selected>-المرجو اختيار القسم او المصلحة-</option>
                                    <option value="0">الكتابة العامة</option>
                                    <option value="1">ديوان السيد العامل</option>
                                    <option value="2">قسم الجماعات المحلية</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row justify-content-end">
                            <button class="btn btn-outline-dark">
                            <i class="fas fa-file-export"></i>
                            &nbsp;
                            إيداع طلب حجز الموعد
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3"></div> -->
    </div>

</main>


<footer id="main-footer" class="bg-dark text-white footer">
    <div class="container py-3">
        <div class="row">
            <div class="text-center col-12 col-md"> 
                <small> {{ \Carbon\Carbon::now()->format('Y') }} ©</small> - <small> عمالة إقليم تارودانت</small> 
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{ asset('js-plugins/parsley/parsley-2.9.2.min.js') }}"></script>
<script src="{{ asset('bootstrap-theme/TextToAr.js') }}"></script>
<script>
    // $('#myModal').on('shown.bs.modal', function () {
    //     $('#myInput').trigger('focus')
    // });

    // $('#wiqaytna').modal({backdrop: 'static', keyboard: false});

    // $('#form-demande-rdvs-citoyen').parsley();

    $(function(){
        txtToAr();
    });
        
</script>


</body>
</html>