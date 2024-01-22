@if ($subCategories->count() != 0)
<div class="">
    <label class="required fw-medium mb-2">หมวดหมู่รอง</label>
    <select class="form-select" name="subCategory" id="subCategory">
        <option value="{{null}}">==เลือกหมวดหมู่รอง==</option>
        @foreach ($subCategories as $subCategory)
        <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
        @endforeach
    </select>
</div>
@endif