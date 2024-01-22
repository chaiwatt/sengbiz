@if ($amphurs->count() != 0)
<div class="">
    <label class="required fw-medium mb-2">หมวดหมู่รอง</label>
    <select class="form-select" name="amphur" id="amphur">
        <option value="{{null}}">==เลือกอำเภอ==</option>
        @foreach ($amphurs as $amphur)
        <option value="{{$amphur->id}}">{{$amphur->name}}</option>
        @endforeach
    </select>
</div>
@endif