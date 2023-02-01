@props(['name'])
<form method="GET" class="form-inline">
    <div class="input-group input-group-sm ml-auto">
        <input type="text" name="{{ $name }}" value="<?=request()->input($name) ?>" class="form-control" placeholder="Search...">
        <div class="input-group-append">
            <button type="submit" class="btn btn-outline-secondary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>