@extends('app.app')

@section('content')
    <section class="news bg-white" style="background: #F8F8FA; font-family: 'Roboto', sans-serif !important;">
        <div class="container bg-white">
            <h3 class="m-3" style="font-weight: bold; font-size: 20px; line-height: 21px; text-align: center; text-transform: uppercase; color: #392D7D;">faol, muomaladan chiqarilgan davlat standartlar, tashkilot stanlartlari va <br> xalqaro stanlartlar reestri</h3>

            <div class="row mt-2 mb-5" style="background: rgba(57, 45, 125, 0.15); border-radius: 12px;">

                <div class="col-12 d-flex ">
                    <div class="text-center mt-3 mr-3">
                        <input type="text" name="serial" id="serial" placeholder="Standart raqami" style="height: 48px; font-size: 18px; text-indent: 10px;  border-radius: 5px; border: none;" class="input_search">
                    </div>

                    <div class=" text-center mt-3  w-100">
                        <input type="text" name="name" id="name" placeholder="Standart nomi" style="height: 48px; font-size: 18px; text-indent: 10px;  border-radius: 5px; border: none;" class="input_text w-100">
                    </div>
                </div>

                <div class="co-12 d-flex ">
                    <div class="text-center mt-3 ml-3" style="padding-left: 0 !important;">
                        <select id="typo" name="typo" class="status" style="width: 100%; height: 48px; font-size: 18px; text-indent: 10px;  border-radius: 5px; border: none;" >
                            @foreach($standartTypes as $standartType)
                                <option value="">{{ $standartType->type_name_uz ?? $standartType->type_name_oz ?? $standartType->type_name_ru ?? $standartType->type_name_en}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-center w-100 ml-3 mt-3" style="padding-left: 0 !important;">
                        <select id="typo" name="typo" class="status w-100" style="height: 48px; font-size: 18px; text-indent: 10px;  border-radius: 5px; border: none;">
                            @foreach($classificators as $classificator)
                                <option value="" >{{ $classificator->number }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center w-100 ml-3 mt-3" style="padding-left: 0 !important;">
                        <select id="typo" name="typo" class="status w-100" style="height: 48px; font-size: 18px; text-indent: 10px;  border-radius: 5px; border: none;">
                            @foreach($classificators as $classificator)
                                <option value="" >OKC Klassificator</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="checkbox col-12 ">
                    <div class="d-flex justify-content-start mx-3 mt-3 w-100">
                        Holati:
                        @foreach($standartStatus as $standartStatu)
                            <label class="mx-3">
                                <input type="checkbox" value="remember-me"> {{$standartStatu->type_name_uz ?? $standartStatu->type_name_oz ?? $standartStatu->type_name_ru ?? $standartStatu->type_name_en }}
                            </label>
                        @endforeach
                    </div>
                </div>


                <div class="col-12 p-3 mb-2 d-flex justify-content-end " style="height: 14px; font-style: italic; font-size: 12px; line-height: 14px; color: #31266D;"> *Tizimdagi ma’lumotlar O‘zStandart reestridan olingan. </div>
            </div>


            <div class="row standard mb-5" id="search_result standard">

            </div>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" type="application/javascript"></script>
        <script>
            $(document).ready(function(){
                let standard = document.querySelector('.standard')
                let inputSearch = document.querySelector('.input_search')
                let inputText = document.querySelector('.input_text')

                function getEverything(data){
                    standard.innerHTML = ''
                    data.forEach(el=>{
                        standard.innerHTML += `<div class="actual w-100 p-4" style="min-height: 66px; background: #FFFFFF; box-shadow: 5px 5px 5px rgba(57, 45, 125, 0.25); border-radius: 12px; margin-bottom: 10px;">
                                <img src="https://tmcity.napaautomotive.uz/storage/${el?.standart_status_id?.logo}" style="margin-left: 10px;">
                                <span style="height: 19px; font-weight: bold; font-size: 16px; line-height: 19px; margin-left: 10px;">
                                    @switch(app()->currentLocale())
                        @case('uz')
                        ${el.standart_type_id.short_type_uz}
                                @break
                        @case('oz')
                        ${el.standart_type_id.short_type_oz}
                                            @break
                        @case('ru')
                        ${el.standart_type_id.short_type_ru}
                                            @break
                        @case('en')
                        ${el.standart_type_id.short_type_en}
                                            @break
                        @endswitch
                            ${el.number}
                        </span>
                        <p style="color: #000000; font-size: 14px; line-height: 16px; margin-left: 10px;" class="mb-0 ">
                            Kategoriya: <span class="font-weight-bold mt-1">
@switch(app()->currentLocale())
                        @case('uz')
                        ${el.standart_type_id.type_name_uz}
                                            @break
                        @case('oz')
                        ${el.standart_type_id.type_name_oz}
                                            @break
                        @case('ru')
                        ${el.standart_type_id.type_name_ru}
                                            @break
                        @case('en')
                        ${el.standart_type_id.type_name_en}
                                            @break
                        @endswitch
                        </span>
                        Holati: <span class="font-weight-bold mt-1">
@switch(app()->currentLocale())
                        @case('uz')
                        ${el.standart_status_id.type_name_uz}
                                                                                @break
                        @case('oz')
                        ${el.standart_status_id.type_name_oz}
                                                                                @break
                        @case('ru')
                        ${el.standart_status_id.type_name_ru}
                                                                                @break
                        @case('en')
                        ${el.standart_status_id.type_name_en}
                                                                                @break
                        @endswitch
                        </span>  
                        Qaror: <span class="font-weight-bold mt-1">${el?.rule}</span>  
                                    Qaror Sanasi: <span class="font-weight-bold mt-1">${el?.rule_start_data}</span>  
                                    Amalga kiritilishi: <span class="font-weight-bold mt-1">${el?.rule_execute_data}</span>  
                                    Amal qilinishi: <span class="font-weight-bold mt-1">${el?.rule_finish_data}</span>  
                                </p>
                                 <p style="color: #000000; font-size: 14px; line-height: 16px; margin-left: 10px;" class="mt-0 ">
                                    OKS raqami: <span class="font-weight-bold">${ el?.classificator_id?.number}
                                    @switch(app()->currentLocale())
                        @case('uz')
                        ${el.classificator_id.text_uz}
                                            @break
                        @case('oz')
                        ${el.classificator_id.text_oz}
                                            @break
                        @case('ru')
                        ${el.classificator_id.text_ru}
                                            @break
                        @case('en')
                        ${el.classificator_id.text_en}
                                            @break
                        @endswitch
                        </p>
                        <p style="color: #000000; font-size: 18px; line-height: 16px; margin-left: 10px;" class="mt-2 ">
@switch(app()->currentLocale())
                        @case('uz')
                        ${el.text_uz}
                                            @break
                        @case('oz')
                        ${el.text_oz}
                                            @break
                        @case('ru')
                        ${el.text_ru}
                                            @break
                        @case('en')
                        ${el.text_en}
                                            @break
                        @endswitch
                        </p>

                    </div>`
                    })
                    return data
                }
                (function getAll(){
                    $.ajax({
                        type:"GET",
                        url: "{{ url('api/standard') }}",
                        success: function(data) {
                            let results = data
                            let smth = data

                            inputSearch.addEventListener('input', (e)=>{
                                if (e.target.value !== ''){
                                    smth = results.filter(el=>el.number.toString().includes(e.target.value))

                                } else {
                                    smth = data
                                }

                                getEverything(smth)
                            })

                            inputText.addEventListener('input', (e)=>{
                                if (e.target.value !== '' ){
                                    results = smth.filter(
                                        el=>el.text_en.toLowerCase().includes(e.target.value.toLowerCase())
                                            || el.text_uz.toLowerCase().includes(e.target.value.toLowerCase())
                                            || el.text_oz.toLowerCase().includes(e.target.value.toLowerCase())
                                            || el.text_ru.toLowerCase().includes(e.target.value.toLowerCase())
                                    )
                                } else {
                                    results = data
                                }
                                getEverything(results)

                            })

                            getEverything(results)
                        }
                    })
                })()
            })
        </script>
    </section>
@endsection
