<form action="/admin/account/{{ $id ?? '' }}" method="POST" class="list-group">
    @csrf
    @isset($id)
    {!! method_field('PUT') !!}
    @endisset
    <div class="list-group-item">
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[projects]">
            <label class="form-check-label" for="projects">Projects</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[reports]">
            <label class="form-check-label" for="reports">Reports</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[inventory]">
            <label class="form-check-label" for="inventory">Inventory</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[documedia]">
            <label class="form-check-label" for="documedia">Documents & Media</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[operations]">
            <label class="form-check-label" for="operations">Business Operations</label>
        </div>
    </div>

    <div class="list-group-item">
        <div class="form-check form-check-inline">
            <button type="submit" class="btn btn-primary">Update</div>
        </div>
    </div>
</form>
