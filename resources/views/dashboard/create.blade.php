@extends('layouts.main')
@push('styles')
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
<link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')

<div class="py-3 py-xl-5 bg-gradient">
    <div class="container">

        <div class="row">

            @include('layouts.partial.dashboard-sidebar')

            <div class="col-xl-9 ps-lg-4 ps-xl-5 sidebar">
                <div class="card mb-4">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold mb-0">ข้อมูลทั่วไป</h6>

                        <div class="form-text text-danger">หากท่านมีประกาศอยู่แล้ว เราขอแนะนำให้ท่านแก้ไขประกาศเดิม
                            เนื่องจากหลังการแก้ไข
                            ระบบของเราจะแจ้งไปยัง <a
                                href="https://developers.google.com/search/docs/crawling-indexing/ask-google-to-recrawl?hl=th"
                                class="text-info">Google
                                Indexing</a>
                            เพื่ออัปเดตประกาศของท่าน ประกาศของท่านจะมีผลการค้นหาที่ดีมากกว่าการสร้างประกาศใหม่</div>


                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="required fw-medium mb-2">หัวข้อประกาศ</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="required fw-medium mb-2">หมวดหมู่หลัก</label>
                                    <select class="form-select" name="mainCategory" id="mainCategory">
                                        <option value="{{null}}">==เลือกหมวดหมู่หลัก==</option>
                                        @foreach ($mainCategories as $mainCategory)
                                        <option value="{{$mainCategory->id}}">{{$mainCategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12" id="sub_category_container" style="display: none">

                            </div>

                            <div class="col-sm-12" id="sub_minor_category_container" style="display: none">

                            </div>

                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold mb-0">Google Map</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="required fw-medium mb-2">จังหวัด</label>
                                    <select class="form-select" name="province" id="province">
                                        <option value="{{null}}">==เลือกจังหวัด==</option>
                                        @foreach ($provinces as $province)
                                        <option value="{{$province->id}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12" id="amphur_container" style="display: none">
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="fw-medium mb-2">ละติจูด</label>
                                    <input type="text" class="form-control" name="lat">
                                </div>
                                <!-- end /. form group -->
                            </div>
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="fw-medium mb-2">ลองติจูด</label>
                                    <input type="text" class="form-control" name="lng">
                                </div>
                                <!-- end /. form group -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold mb-0">ข้อมูลติดต่อ / โซเชียลมีเดีย</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="required fw-medium mb-2">เบอร์โทรศัพท์1</label>
                                    <input type="text" class="form-control" name="phone1">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="fw-medium mb-2">เบอร์โทรศัพท์2</label>
                                    <input type="text" class="form-control" name="phone2">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="fw-medium mb-2">Youtube (Watch)</label>
                                    <input type="text" class="form-control" name="youtube">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="fw-medium mb-2">Line Id</label>
                                    <input type="text" class="form-control" name="line_account">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="fw-medium mb-2">Facebook</label>
                                    <input type="text" class="form-control" name="facebook">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="fw-medium mb-2">เว็บไซต์</label>
                                    <input type="text" class="form-control" name="website">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mb-4" id="targetDiv">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold mb-0">ข้อมูลอื่น ๆ</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="fw-medium mb-2">ต้องการนายหน้า</label>
                                    <select class="form-select" id="need_broker" name="need_broker">
                                        <option selected="1">ไม่ต้องการ</option>
                                        <option value="2">ต้องการ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12" id="percent_input_container" style="display:none">
                                <!-- start form group -->
                                <div class="">
                                    <label class="required fw-medium mb-2">เปอร์เซนต์</label>
                                    <input type="text" class="form-control" name="percent" value="3.0">
                                </div>
                                <!-- end /. form group -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header position-relative">
                        <h6 class="fs-17 fw-semi-bold mb-0">รายละเอียดประกาศ</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <!-- start form group -->
                                <div class="">
                                    <label class="required fw-medium mb-2">รายละเอียด <span class="text-danger"
                                            id="keywords"></span>
                                    </label>
                                    <textarea class="form-control" rows="10"
                                        placeholder="เขียนบทความอย่างน้อย 1,000 คำ เพื่อให้เป็นประโยชน์ต่อผู้ค้นหาใน Google และไม่จำเป็นต้องระบุข้อมูลติดต่อที่กรอกไปแล้ว (ข้อมูลติดต่อ / โซเชียลมีเดีย)"></textarea>
                                    <div class="form-text">เพื่อให้การค้นหาประกาศของท่านปรากฏในอันดับต้น ๆ ของผลการค้นหา
                                        ท่านควรเขียนประกาศให้แตกต่างจากประกาศที่ท่านเคยลงประกาศมาแล้วจากแหล่งประกาศอื่น
                                        ๆ
                                        เพื่อหลีกเลี่ยงการตรวจจับเนื้อหาซ้ำซ้อน</div>
                                </div>

                                <div class="mt-3">

                                    <div class="col-md-12">
                                        <label class="required fw-medium mb-2">รูปภาพ (ให้อัพโหลดอย่างน้อย 3 รูป ขนาด
                                            900x550 พิกเซล)</label>
                                        <form action="{{route('dashboard.upload')}}" method="post"
                                            enctype="multipart/form-data" id="image-upload" class="dropzone"
                                            style="border: 2px dashed #F84525">
                                            @csrf
                                        </form>
                                        <div class="form-text">แนะนำไฟล์ขนาด 900 x 550 px (png, jpg, jpeg)
                                            เพื่อการแสดงผลที่สวบงาม เหมาะสม</div>
                                    </div>


                                </div>
                                <!-- end /. form group -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 pt-lg-4 pt-3 text-left">
                    <a href="blog.html" class="btn btn-lg btn-primary">บันทึกและเผยแพร่</a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')

<script type="module" src="{{ asset('assets/js/helper/api.js?v=1') }}">
</script>
<script>
    window.params = {
            subCategoryRoute: '{{ route('dashboard.api.sub-category') }}',        
            subMinorCategoryRoute: '{{ route('dashboard.api.sub-minor-category') }}',
            amphurRoute: '{{ route('dashboard.api.amphur') }}',
            url: '{{ url('/') }}',
            token: $('meta[name="csrf-token"]').attr('content')
        };

  
        
    $(document).ready(function() {


      $(window).scroll(function() {
        // ตรวจสอบว่า div ที่มี ID เท่ากับ "targetDiv" อยู่ในมุมมองหรือไม่
        var targetDivTop = $("#targetDiv").offset().top;
        var windowTop = $(window).scrollTop();
        var windowHeight = $(window).height();

        if (windowTop + windowHeight > targetDivTop) {
    
            var mainCategoryValue = $("#mainCategory option:selected").val();
            if (mainCategoryValue !== "") {
            mainCategoryValue = $("#mainCategory option:selected").text();
            }
            
            var subCategoryValue = $("#subCategory option:selected").val();
            if (subCategoryValue !== "") {
            subCategoryValue = $("#subCategory option:selected").text();
            }
            
            var subMinorCategoryValue = $("#subMinorCategory option:selected").val();
            if (subMinorCategoryValue !== "") {
            subMinorCategoryValue = $("#subMinorCategory option:selected").text();
            }
            
            var provinceValue = $("#province option:selected").val();
            if (provinceValue !== "") {
            provinceValue = $("#province option:selected").text();
            }
            
            var amphurValue = $("#amphur option:selected").val();
            if (amphurValue !== "") {
            amphurValue = $("#amphur option:selected").text();
            }
            
            // นำค่ามารวมเรียงตามลำดับที่ต้องการ
            var combinedKeywords = [mainCategoryValue, subCategoryValue, subMinorCategoryValue, amphurValue, provinceValue]
            .filter(value => typeof value !== 'undefined' && value !== '')
            .join(", ");
            console.log(combinedKeywords)
            if(combinedKeywords !== "")
            {
                $("#keywords").text("(ให้เพิ่มคำ " + combinedKeywords + " ลงในประกาศเพื่อผลเพิ่มผลการค้นหา)");
            }
            
        }
      });

    var dropzone = new Dropzone('#image-upload', {
        thumbnailWidth: 200,
        maxFilesize: 1,
        dictDefaultMessage: '<span class="text-secondary">ลากและวางไฟล์รูปที่นี่</span>',
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        init: function() {
            this.on("success", function(file, response) {
                console.log(response);

            });
        }
    });

    });
    $('#need_broker').on('change', function() {
        var selectedValue = $(this).val();
        if (selectedValue === '2') {
            $('#percent_input_container').show(); // แสดง <div>
        } else {
            $('#percent_input_container').hide(); // ซ่อน <div>
        }
    });

</script>
@endpush
@endsection