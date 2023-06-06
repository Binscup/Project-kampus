<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <form wire:submit="create" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Name Categories</label>
                    <input type="text" wire:model="name" class="form-control" name="example-text-input"
                        placeholder="Input placeholder">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
