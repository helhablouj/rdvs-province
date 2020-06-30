 <form id="form-demande-rdvs-citoyen" action="{{ route('public.demande-rdvs')}}" method="POST" data-parsley-validate
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
            <br>
            <span class="data-shown d-none"></span>
        </div>
        <div class="col-md-4 mb-3">
            <label for="nom">الاسم العائلي<em class="text-danger"> *</em></label>
            <input type="text" class="form-control ToAR" 
                    data-parsley-error-message="المرجو ادخال الاسم العائلي" 
                    data-parsley-minlength="3" data-parsley-minlength-message="المرجو ادخال اسم صحيح"
                    id="nom" name="nom" required>
            <br>
            <span class="data-shown d-none"></span>
        </div>
        <div class="col-md-4 mb-3">
            <label for="cnie">رقم البطاقة الوطنية للتعريف <em class="text-danger"> *</em></label>
            <input type="text" class="form-control" 
                    data-parsley-type="alphanum"
                    data-parsley-error-message="المرجو ادخال رقم البطاقة الوطنية" 
                    data-parsley-minlength="4" data-parsley-minlength-message=" رقم البطاقة الوطنية خاطيء"
                    id="cnie" name="cnie" required>
            <br>
            <span class="data-shown d-none"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-5 mb-3">
            <label for="email">البريد الالكتروني</label>
            <input type="email" class="form-control" dir="ltr"
                    data-parsley-type-message="المرجو ادخال بريد الكتروني صحيح"
                    id="email" name="email">
            <br>
            <span class="data-shown d-none"></span>
        </div>
        <div class="col-md-3 mb-3">
            <label for="tel">رقم الهاتف<em class="text-danger"> *</em></label>
            <input type="text" class="form-control" 
                    data-parsley-pattern="^0[5-7]\d{8}" data-parsley-pattern-message="المرجو ادخال رقم هاتف صحيح" 
                    id="tel" name="tel" required>
            <br>
            <span class="data-shown d-none"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="objet">الموضوع<em class="text-danger"> *</em></label>
            <textarea type="text" class="form-control ToAR" 
                    data-parsley-required-message="المرجو تحديد موضوع طلب الموعد" 
                    id="objet" name="objet" required></textarea>
            <br>
            <span class="data-shown d-none"></span>
        </div>
        <div class="col-md-6 mb-3">
            <label for="entite">القسم/المصلحة<em class="text-danger"> *</em></label>
            <select type="text" class="form-control" 
                    data-parsley-required-message="المرجو اختيار القسم أو المصلحة"
                    id="entite" name="entite_id" required>
                <option value="" disabled selected>-المرجو اختيار القسم او المصلحة-</option>
                @foreach($entites as $entite)
                <option value="{{ $entite->id }}">
                    {{ $entite->nom }}
                </option>
                @endforeach
            </select>
            <br>
            <span class="data-shown d-none"></span>
        </div>
    </div>
    <hr>
    <div class="form-row justify-content-end">
       
           
            <button class="btn btn-success mr-5 ml-5 d-none" id="valider-demande">
                <i class="far fa-check-circle"></i>
                &nbsp;
                تأكيد المعلومات
            </button>
            <button class="btn btn-danger d-none" type="button" id='btn-corriger-info'>
                <i class="fas fa-undo"></i>
                &nbsp;
                تصحيح
            </button>
            
            
            <button class="btn btn-outline-dark" id='btn-demander-rdvs'>
                <i class="fas fa-file-export"></i>
                &nbsp;
                إيداع طلب حجز الموعد
            </button>
            
    </div>
</form>