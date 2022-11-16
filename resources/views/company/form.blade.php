@csrf


<div class="mb-3">
    <label for="companyName" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="companyName"
        value="{{ old('name') ?? $company->name }}">
    <div class="form-text text-danger">{{ $errors->first('name') }}</div>
</div>

<div class="mb-3">
    <label for="comanyEmail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="comanyEmail"
        value="{{ old('email') ?? $company->email }}">
    <div class="form-text text-danger">{{ $errors->first('email') }}</div>
</div>

<div class="mb-3">
    <label for="companyLogo" class="form-label">Logo</label>
    <input type="text" name="logo" class="form-control" id="companyLogo"
        value="{{ old('logo') ?? $company->logo }}">
    <div class="form-text text-danger">{{ $errors->first('logo') }}</div>
</div>

<div class="mb-3">
    <label for="companyWebsite" class="form-label">Website Link</label>
    <input type="text" name="website" class="form-control" id="companyWebsite"
        value="{{ old('website') ?? $company->website }}">
    <div class="form-text text-danger">{{ $errors->first('website') }}</div>
</div>
