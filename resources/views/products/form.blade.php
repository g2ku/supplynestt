
<form method="post" action="{{ $action }}" enctype="multipart/form-data">
    @method($method ?? 'POST')
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-1">
        <label for="price">Price</label>
        <input type="number" step=".01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" min="0" max="999999999999"
               value="{{isset($product) ? number_format($product->price) : old('price')}}" >
        @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-1">
        <label for="description">Description</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}">
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>


