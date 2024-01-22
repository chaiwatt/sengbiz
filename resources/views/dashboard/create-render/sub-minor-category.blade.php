@if ($subMinorCategories->count() != 0)
<div>
    <label class="required fw-medium mb-2">หมวดหมู่ย่อย</label>
    <select class="form-select" name="subMinorCategory" id="subMinorCategory">
        <option value="{{null}}">==เลือกหมวดหมู่ย่อย==</option>
        @foreach ($subMinorCategories as $subMinorCategory)
        <option value="{{$subMinorCategory->id}}">{{$subMinorCategory->name}}</option>
        @endforeach
    </select>
</div>
@endif